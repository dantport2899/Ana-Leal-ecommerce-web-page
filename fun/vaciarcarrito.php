<?php 
session_start();
unset($_SESSION['CARRITO']);
echo '<script>alert("Carrito Limpiado")</script>';
echo "<script>location.href='../cliente/carrito.php'</script>";
?>