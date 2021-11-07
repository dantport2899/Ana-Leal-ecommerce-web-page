<?php
//conectar con la base de datos
require("../fun/connect_db.php");

$name = $_POST['name'];
$description = $_POST['description'];
$descuento = $_POST['descuento'];



$sql="Insert into descuentos (nom_descuento,descripcion,descuento) values ('$name','$description','$descuento') " ;

$result=mysqli_query($conexion, $sql);

if($result)
{
  echo "Registo exitoso";
}else
{
    echo "Error de registro" .$sql . "<br>" .mysqli_error($conexion);
}
mysqli_close($conexion);

echo "<script>location.href='../administrador/descuentos.php'</script>";

 ?>
