<?php
session_start();

$id=$_SESSION['idusuario'];

extract($_POST);
require("connect_db.php");


$cambio="UPDATE usuarios SET nom_usuario='$name', username='$username', correo='$email', contrasena='$pass', telefono='$tel', direccion='$address' WHERE idusuario='$id'";

$rescamb=mysqli_query($conexion, $cambio);

if($rescamb==null){
  echo "No se actualizaron datos" .mysqli_error($conexion);
  //header("Location:admi.php");

}else{

    $_SESSION['nom_ususario']=$name;
    $_SESSION['username']=$username;
    $_SESSION['correo']=$email;
    $_SESSION['direccion']=$pass;
    $_SESSION['telefono']=$tel;
    $_SESSION['direccion']=$address;


  echo '<script>alert("Registro exitoso")</script>' .mysqli_error($conexion);
 //header("Location:admi.php");
  echo "<script>location.href='../administrador/home-administrador.php'</script>";
}
?>