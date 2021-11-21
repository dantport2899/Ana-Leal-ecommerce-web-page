<?php
extract($_POST);
require("connect_db.php");


$cambio="UPDATE pedidos SET fechaentrega='$fechaentrega', fecha='$fecha' WHERE id='$idpedidos";

$rescamb=mysqli_query($conexion, $cambio);

if($rescamb==null){
  echo "No se actualizaron datos" .mysqli_error($conexion);
 

}else{
  echo '<script>alert("Registro exitoso")</script>' .mysqli_error($conexion);
 
  echo "<script>location.href='../administrador/descuentos.php'</script>";
}
 ?>