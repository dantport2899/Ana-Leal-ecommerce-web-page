
<?php
include('../conexion.php');
if(isset($_GET['id'])){
$resultado = $conexion -> query("select * from prendas where idprenda=".$_GET['id'])or die($conexion->error);
  if(mysqli_num_rows($resultado)>0){
    $fila = mysqli_fetch_row($resultado);
    $imagen = $fila[9];
  }else{
    header("Location: ../home-cliente.php");
  }
}
else{
  //redireccionar
  header("Location: ../home-cliente.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Detalles del Producto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  
  
        <!-- Insertar navbar -->
        <?php
        include '../plantillas/navbar-clientes.php'
        ?>
        <!-- Insertar navbar -->

          <div class="page-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Ana Leal prendas y vestidos</h1>
                            
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        
                    </div>
                </div>
            </div>
          </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $imagen ?>" alt="<?php echo $fila[1];?>" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $fila[1];?></h2>
            <p><?php echo $fila[10];?></p>
            <p><strong class="text-primary h4">$<?php echo $fila[3];?></strong></p>
            <div class="mb-1 d-flex">
              <p>Stock: <?php echo $fila[11];?></p>
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <select name="cantidad" id="cant">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <p><a href="cart.php" class="buy-now btn btn-sm btn-primary">+ Agregar al Carrito</a></p>

          </div>
        </div>
      </div>
    </div>
   
    <?php include("../plantillas/footer.php"); ?> 
      
  </body>
</html>