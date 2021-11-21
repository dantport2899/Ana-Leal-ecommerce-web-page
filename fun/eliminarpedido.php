<?php
//conectar con la base de datos
require("connect_db.php");

$idpedidos = $_POST['idpedidos'];
   

          
$sqlborrar="DELETE from pedidos where idpedidos=$idpedidos";
$resborrar=mysqli_query($conexion, $sqlborrar);
           
if($resborrar)
    {
        echo '<script>alert ("Pedido eliminado")</script>';
    }else
    {
        echo "Error de eliminacion<br>" .mysqli_error($conexion);
    }

echo "<script>location.href='../administrador/pedidos.php'</script>";

mysqli_close($conexion);



 ?>