<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ana Leal</title>
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

        <div class="hero">
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

        
        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <h4>Catálogo</h4>
                    <h2>Ropa para Boda</h2>
                </div>
            </div>
        </div>

        <div class="text-center">          
        <?php
            include ('../conexion.php');
            $resultado = $conexion ->query("select * from prendas order by idprenda DESC limit 3")or die($conexion -> error);
            while($fila = mysqli_fetch_array($resultado)){
        ?>
                
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="src/prendas/<?php echo $fila['img_nombre'];?>" alt="<?php echo $fila['nom_prenda'];?>">
                            </div>
                            <h3><?php echo $fila['nom_prenda'];?></h3>
                            <p>
                                <?php echo $fila['descripcion']; ?>
                            </p>
                            <p>$<?php echo $fila['precio']; ?></p>
                            <a class="btn" href="">Agregar al carrito</a>
                        </div>
                    </div>
                
        <?php } ?>
        </div>
        <!-- Insertar footer -->
        <?php
        include '../plantillas/footer.php'
        ?>
        <!-- Insertar footer -->
    </body>
    </html>