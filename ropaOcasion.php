<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ana Leal - Ropa de Ocasión</title>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        <link href="css/hoverimages.css" rel="stylesheet">

        <!-- JS Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    </head>

    <body>
        <!-- Insertar navbar -->
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand pr-3" href="#" style="font-family: Bodoni FS; font-size: 45px;" >ANA LEAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php" style="text-transform: uppercase;">Inicio</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="index.php#novedades" style="text-transform: uppercase;">Novedades</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="ropaboda.php" style="text-transform: uppercase;">Ropa&nbsp;de&nbsp;boda</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="ropaocasion.php" style="text-transform: uppercase;">Ropa&nbsp;de&nbsp;ocasión</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="ropaoferta.php" style="text-transform: uppercase;">Ropa&nbsp;en&nbsp;oferta</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="index.php#ELFOOTER" style="text-transform: uppercase;">Contáctanos</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                        <li class="nav-item px-2">
                            <a class="nav-link" href="login.php" style="text-transform: uppercase;">Iniciar&nbsp;sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <br><br><br><br><br><br><br>
        <!-- Insertar navbar -->

        

        
        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <h4>Catálogo</h4>
                    <h2>Ropa de Ocasión</h2>
                </div>
            </div>
        </div>

        <div class="container text-center">
        <div class="row service">          
        <?php
            
            include ('conexion.php');
            $resultado = $conexion ->query("select * from prendas WHERE idestilo = '2' order by idprenda ASC ")or die($conexion -> error);
            while($fila = mysqli_fetch_array($resultado)){
                $imagen=$fila['img_archivo'];
        ?>
                
                    <div class="col-lg-4 col-md-6">
                        <div class="card service-item">
                            <div class="service-img">
                                <a href="detalleProducto.php?id=<?php echo $fila['idprenda'];?>">
                                <img src="src/prendas/<?php echo $fila['img_nombre'];?>/<?php echo $fila['img_nombre'];?>" alt="<?php echo $fila['nom_prenda'];?>"></a>
                            </div>
                            <h3><a href="detalleProducto.php?id=<?php echo $fila['idprenda'];?>"><?php echo $fila['nom_prenda'];?></a></h3>
                            <p>
                                <?php echo $fila['descripcion']; ?>
                            </p>
                            <p>$<?php echo $fila['precio']; ?></p>
                            <a class="btn" href="">+ Agregar al carrito</a>
                            
                        </div>
                    </div>
                
        <?php } ?>
        </div>
        </div>
        <br><br><br>
        
        <!-- Inicio de Footer -->
        <footer class="footer mt-auto py-3 bg-light bg-dark text-white">
            <div class="container">
                <form action="">
                <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                        <strong>Suscríbete a nuestro newsletter</strong>
                        </p>
                    </div>
                <!--Grid column-->

                <!--Grid column-->
                    <div class="col-md-5 col-12">
                    <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                        <input type="email" id="mailforNewsletter" class="form-control" placeholder="Ingresa tu email"/>
                        </div>
                    </div>
                <!--Grid column-->

                <!--Grid column-->
                    <div class="col-auto">
                    <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-light mb-4">
                        Subscribirse
                        </button>
                    </div>
                <!--Grid column-->
                    </div>
                <!--Grid row-->
                </form>

            </div>
            
            <!-- Texto sobre los detalles del negocio o empresa -->
            <div class="container">
                <p style="text-align: center;">Descripción breve del negocio y sobre qué detalles tiene.</p>
                <hr>
            </div>

            <!-- Texto sobre los links de contacto y otros links útiles -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto" id="ELFOOTER">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Contacto
                </h6>
                <p><i class="fas fa-home me-3"></i> Dirección del negocio</p>
                <p><i class="fas fa-envelope me-3">&nbsp;analeal@example.com</i></p>
                <p><i class="fas fa-phone me-3"></i> Numero de teléfono</p>
                <p><i class="fab fa-facebook me-3"></i> Página de Facebook</p>
            </div>
        </footer>
        
        <!-- Insertar footer -->
    </body>
    </html>