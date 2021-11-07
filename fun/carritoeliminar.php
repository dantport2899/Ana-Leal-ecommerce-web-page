<?php
session_start();



 if(is_numeric($_POST['id']))
 {
    $ID=$_POST['id'];

    	foreach ($_SESSION['CARRITO'] as $indice=>$producto )
      {
        if ($producto['ID']==$ID)
        {
          unset($_SESSION['CARRITO'][$indice]);


        }
      }

 }else {

        echo "<script>alert('UPsss, id incorrecto...')<script>";


 }

  echo "<script>location.href='../cliente/carrito.php'</script>";

 ?>