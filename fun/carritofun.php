
 <?php
session_start();

   $id = $_POST['id'];
   $nombre = $_POST['nombre'];
   $descripcion = $_POST['descripcion'];
   $precio = $_POST['precio'];
   $imagen = $_POST['imagen'];
   $cantidad = $_POST['cantidad'];
   

   if(!isset($_SESSION['CARRITO']))
   {
     $producto=array(
       'ID'=>$id,
       'NOMBRE'=>$nombre,
       'CANTIDAD'=>$cantidad,
       'PRECIO'=>$precio,
       'DESCRIPCION'=>$descripcion,
       'IMAGEN'=>$imagen
     );

     $_SESSION['CARRITO'][0]=$producto;

    echo '<script>alert("Se agrego el producto al carrito de compras")</script>';

   }else {

     $idProductos=array_column($_SESSION['CARRITO'],"ID");

     if (in_array($id,$idProductos))
     {
        echo '<script>alert("El producto ya habia sido agregado al carrito...")</script>';

     }
     else
     {
       $NumeroProductos=count($_SESSION['CARRITO']);
       $producto=array(
         'ID'=>$id,
         'NOMBRE'=>$nombre,
         'CANTIDAD'=>$cantidad,
         'PRECIO'=>$precio,
         'DESCRIPCION'=>$descripcion,
         'IMAGEN'=>$imagen
       );
       $_SESSION['CARRITO'][$NumeroProductos]=$producto;
       echo '<script>alert("Se agrego el producto al carrito de compras")</script>';


     }
   }
 echo "<script>location.href='../cliente/cliente-index.php'</script>";
  ?>
