<?php
extract($_POST);
require("connect_db.php");


$cambio="UPDATE prendas SET nom_prenda='$name', idtalla='$talla', precio='$price', iddepartamento='$department', color='$color', idmaterial='$material', idestilo='$style', descripcion='$description', existencias='$exist', iddescuento='$desc' WHERE idprenda='$id'";

$rescamb=mysqli_query($conexion, $cambio);

if($rescamb==null){
  echo "No se actualizaron datos" .mysqli_error($conexion);
  //header("Location:admi.php");

}else{
  echo '<script>alert("Registro exitoso")</script>' .mysqli_error($conexion);
 //header("Location:admi.php");
  echo "<script>location.href='../administrador/inventario.php'</script>";
}
 ?>