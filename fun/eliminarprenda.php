<?php
//conectar con la base de datos
require("connect_db.php");

$id = $_POST['id'];
$img = $_POST['nombre'];

$carpeta = "../src/prendas/" .$img;

            
foreach(glob($carpeta . "/*") as $archivos_carpeta){             
    if (is_dir($archivos_carpeta)){
        rmDir_rf($archivos_carpeta);
     } else {
        unlink($archivos_carpeta);
    }
}
rmdir($carpeta);

    

          
$sqlborrar="DELETE from prendas where idprenda=$id";
$resborrar=mysqli_query($conexion, $sqlborrar);
           
if($resborrar)
    {
        echo '<script>alert ("Registro eliminado")</script>';
    }else
    {
        echo "Error de eliminacion" .$sql . "<br>" .mysqli_error($conexion);
    }

echo "<script>location.href='../administrador/inventario.php'</script>";

mysqli_close($conexion);



 ?>