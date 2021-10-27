<?php
session_start();

require("connect_db.php");
$email=$_POST['email'];
$pass=$_POST['pass'];
$_SESSION['email']=$email;
$_SESSION['productos']=0;

$sql=mysqli_query($conexion, "SELECT idusuario, nom_usuario, username, contrasena, correo, idrol, direccion, telefono from usuarios where correo='$email'");

if($f=mysqli_fetch_assoc($sql)){
  if ($pass==$f['contrasena']) {
    $_SESSION['idusuario']=$f['idusuario'];
    $_SESSION['nom_ususario']=$f['nom_usuario'];
    $_SESSION['username']=$f['username'];
    $_SESSION['correo']=$f['correo'];
    $_SESSION['rol']=$f['idrol'];
    $_SESSION['direccion']=$f['direccion'];
    $_SESSION['telefono']=$f['telefono'];


    if($_SESSION['rol']==1)
    {
      echo '<script>alert("Bienvenido Administrador"  )</script>';
      echo "<script>location.href='../adiministrador/home-administrador.php'</script>";
    }
    elseif ($_SESSION['rol']==2)
    {
      echo '<script>alert("Bienvenido Usuario")</script>';
      echo "<script>location.href='../cliente/home-cliente.php'</script>";
    }
    

  }else
  {
    echo '<script>alert("Contrasena Incorrecta")</script>';
    echo "<script>location.href='../login.php'</script>";
  }
}




 ?>