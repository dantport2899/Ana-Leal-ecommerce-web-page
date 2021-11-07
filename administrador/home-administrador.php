<?php
//cargar la sesion
session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ana Leal - Administracion</title>
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
        <link href="../css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        
        <!-- Insertar navbar -->
         
         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand pr-3" href="#" style="font-family: Bodoni FS; font-size: 45px;" >ANA LEAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" style="text-transform: uppercase;">Inicio</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="inventario.php" style="text-transform: uppercase;">Inventario</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="pedidos.php" style="text-transform: uppercase;">Pedidos</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="descuentos" style="text-transform: uppercase;">Descuentos</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="calendario" style="text-transform: uppercase;">Calendario</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="ayuda.php" style="text-transform: uppercase;">Ayuda</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                        <li class="nav-item px-2">
                            <a class="nav-link" href="" style="text-transform: uppercase;"><?php echo $_SESSION['username'] ?></a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="../fun/desconectar.php" style="text-transform: uppercase;">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- Insertar navbar -->


        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Ana Leal prendas y vestidos</h1>
                            <p>
                                Bienvenido Administrador
                            </p>
                            <a class="btn" href="https://htmlcodex.com/barber-shop-template">Comencemos</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Hero End -->


       

        

    <?php
   include '../plantillas/footer.php'
    ?>

    

    </body>
</html>