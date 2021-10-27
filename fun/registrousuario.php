<?php
//conectar con la base de datos
require("connect_db.php");

$sql="Insert into usuarios (nom_usuario,correo,username,contrasena,idrol,direccion,telefono) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['username']."','".$_POST['pass']."','".$_POST['rol']."','".$_POST['address']."','".$_POST['tel']."') " ;

$result=mysqli_query($conexion, $sql);

if($result)
{
  echo "Registo exitoso";
}else
{
    echo "Error de registro" .$sql . "<br>" .mysqli_error($conexion);
}
mysqli_close($conexion);

ob_start();
header("refresh:2,url=../login.php");
ob_end_flush();
 ?>