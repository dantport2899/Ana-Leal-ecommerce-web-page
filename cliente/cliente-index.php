<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ana Leal</title>

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
        <link href="../css/hoverimages.css" rel="stylesheet">

        <!-- JS Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>

    <body style="padding-top: 80px;">
        <header>  
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
                            <a class="nav-link active" aria-current="page" href="#" style="text-transform: uppercase;">Inicio</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="cliente-index.php#novedades" style="text-transform: uppercase;">Novedades</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="cliente-index.php#boda" style="text-transform: uppercase;">Ropa&nbsp;de&nbsp;boda</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="cliente-index.php#ocasion" style="text-transform: uppercase;">Ropa&nbsp;de&nbsp;ocasión</a>
                        </li>
                        <li class="nav-item px4">
                            <a class="nav-link" href="cliente-index.php#oferta" style="text-transform: uppercase;">Ropa&nbsp;en&nbsp;oferta</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="cliente-index.php#ELFOOTER" style="text-transform: uppercase;">Contáctanos</a>
                        </li>
                        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="text-transform: uppercase;"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    @NOMBRE_USUARIO
                                </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Ir a perfil</a></li>
                                        <li><a class="dropdown-item" href="#">Revisar pedidos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="../index.php">Cerrar sesión</a></li>
                                    </ul>
                            </li>
                        </ul>
                        
                    </ul>
                    </ul> 
                </div>
            </nav>

  
        </header>
        <!-- Novedades -->
        <div class="novedades" id="novedades">
           <div class="hovereffect">
                <img src="https://c.pxhere.com/photos/3d/e4/bride_marriage_wedding_dress_woman_girl_model_dress_fashion-979555.jpg!d" class="mx-auto d-block w-full" alt="image">
                    <div class="overlay">
                        <h2>Novedades</h2>
                        <p>Explora los productos más recientes y nuevos.</p>
                        <a class="btn btn-outline-dark btn-lg" href="#" role="button" style="text-transform: uppercase;">Ver más</a>
                    </div>
            </div>       
        </div>

        <!-- Ropa de boda -->
        <div class="boda" id="boda">
            <div class="hovereffect">
                <img src="../src/prendas/index-boda.jpg" class="mx-auto d-block w-100" alt="image">
                    <div class="overlay">
                        <h2>Ropa de boda</h2>
                        <p>¿Tienes una boda o compromiso similar? Aquí encontrarás tu vestido ideal para la ocasión.</p>
                        <a class="btn btn-outline-dark btn-lg" href="#" role="button" style="text-transform: uppercase;">Ver más</a>
                    </div>
            </div>
        </div>

        <!-- Ropa de ocasion -->
        <div class="ocasion" id="ocasion">
            <div class="hovereffect">
                <img src="../src/prendas/index-casual.jpeg" class="mx-auto d-block w-100" alt="image">
                    <div class="overlay">
                        <h2>Ropa de ocasión</h2>
                        <p>¿Buscas algo casual? Explora nuestras prendas especiales para toda ocasión casual.</p>
                        <a class="btn btn-outline-dark btn-lg" href="#" role="button" style="text-transform: uppercase;">Ver más</a>
                    </div>
            </div>
        </div>
        
        <!-- Ropa en oferta -->
        <div class="oferta" id="oferta">
            <div class="hovereffect">
                <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fabeautifulmess.typepad.com%2F.a%2F6a00d8358081ff69e2016301db4217970d-800wi&f=1&nofb=1" class="mx-auto d-block w-100" alt="image">
                    <div class="overlay">
                        <h2>Ropa en oferta</h2>
                        <p>¿Deseas ahorrar? Explora nuestro catálogo centrado en ofertas.</p>
                        <a class="btn btn-outline-dark btn-lg" href="#" role="button" style="text-transform: uppercase;">Ver más</a>
                    </div>
            </div>
        </div>

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
        
    </body>
</html>
