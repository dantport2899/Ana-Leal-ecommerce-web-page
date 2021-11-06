<html>
<head>
        <meta charset="utf-8">
        <title>Ana Leal</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
        
    </head>
    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-bar-left">
                            <div class="text">
                                <h2>8:00 - 9:00</h2>
                                <p>Opening Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2>+123 456 7890</h2>
                                <p>Call Us For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="home-administrador.php" class="navbar-brand">Ana Leal</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="home-administrador.php" class="nav-item nav-link">Inicio</a>
                        <a href="inventario.php" class="nav-item nav-link">Inventario</a>
                        <a href="service.html" class="nav-item nav-link">Pedidos</a>
                        <a href="descuentos.php" class="nav-item nav-link">Descuentos</a>
                        <a href="team.html" class="nav-item nav-link">Calendario</a>
                        <a href="portfolio.html" class="nav-item nav-link">FAQ</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?></a>
                            <div class="dropdown-menu">
                                <a href="login.php" class="dropdown-item">Modifciar perfil</a>
                                <a href="../fun/desconectar.php" class="dropdown-item">Cerrar Sesion</a>
                            </div>
                        </div>
                        
                        <a href="contact.html" class="nav-item nav-link">Ayudas</a>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
    </body>
</html>
