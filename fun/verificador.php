<?php 
session_start();
//print_r($_GET);
include('../fun/connect_db.php');
define("KEY","analeal");
define("COD","AES-128-ECB");

$ClientID="ASPDmLQQH-Uod0VBYyp5n6dM_WWfnuF59F24M77ZzCV07LJMY37UsomtZFAYc5frw36EM2V8e8VkOTxH";
$Secret="EAbAtRbh5IMTjY2cbPu0r0_LyRVrv3slzh7DSX3mg4opklitBNvUi6LpoA0gFxFsgCTR4He797igek_6";


$Login= curl_init("https://api.sandbox.paypal.com/v1/oauth2/token");


curl_setopt($Login,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($Login,CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($Login,CURLOPT_USERPWD,$ClientID.":".$Secret);
curl_setopt($Login,CURLOPT_POSTFIELDS,"grant_type=client_credentials");
$Respuesta=curl_exec($Login);

$objRespuesta = json_decode($Respuesta);

$AccesToken = $objRespuesta->access_token;

//print_r($AccesToken);

$venta= curl_init("https://api-m.sandbox.paypal.com/v1/payments/payment/".$_GET['paymentID']);

curl_setopt($venta,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($venta,CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$AccesToken));
curl_setopt($venta,CURLOPT_RETURNTRANSFER,TRUE);

$RespuestaVenta=curl_exec($venta);


//print_r($RespuestaVenta);

$objDatosTransaccion=json_decode($RespuestaVenta);

$state=$objDatosTransaccion->state;
$email=$objDatosTransaccion->payer->payer_info->email;
$total=$objDatosTransaccion->transactions[0]->amount->total;
$currency=$objDatosTransaccion->transactions[0]->amount->currency;
$custom=$objDatosTransaccion->transactions[0]->custom;


$clave=explode("#",$custom);
$SID=$clave[0];
$claveventa=openssl_decrypt($clave[1],COD,KEY);

curl_close($venta);
curl_close($Login);

if($state=="approved")
{

    $sql="UPDATE `pedidos` 
    SET `paypaldatos` = '$RespuestaVenta', `status` = 'APROVADO' 
    WHERE `pedidos`.`idpedidos` = '$claveventa';" ;

    $result=mysqli_query($conexion, $sql);
    if($result)
    {

    }else
    {
        echo "Error de registro<br>" .mysqli_error($conexion);
    }

    unset($_SESSION['CARRITO']);

    echo '<script>alert("Pago Aprovado")</script>';
    echo "<script>location.href='../cliente/pedidos.php'</script>";

}else{
    echo '<script>alert("Hay un problema con el pago")</script>';
    echo "<script>location.href='../cliente/pedidos.php'</script>";
}

?>
