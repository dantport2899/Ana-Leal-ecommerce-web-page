<?php
//conectar con la base de datos
require("../fun/connect_db.php");

$name = $_POST['name'];
$description = $_POST['description'];
$imagen = $_FILES['Imagen']['name'];
$imagenruta = $_FILES['Imagen']['tmp_name'];

$path = "../src/prendas/".$imagen;

if (!file_exists($path)) {
    mkdir($path, 0777, true);
}

$destino = "../src/prendas/".$imagen. "/" .$imagen;
copy($imagenruta,$destino);

$department = $_POST['department'];
$talla = $_POST['talla'];
$exist = $_POST['exist'];
$color = $_POST['color'];
$style = $_POST['style'];
$material = $_POST['material'];
$desc = $_POST['desc'];
$price = $_POST['price'];



$sql="Insert into prendas (nom_prenda,descripcion,img_archivo,iddepartamento,idtalla,existencias,color,idestilo,idmaterial,iddescuento,precio) values ('$name','$description','$destino','$department','$talla','$exist','$color','$style','$material','$desc','$price') " ;

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
header("refresh:2,url=../administrador/nuevaprenda.php");
ob_end_flush();

 ?>