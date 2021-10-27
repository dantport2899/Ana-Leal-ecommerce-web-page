<html>
<head>
        <meta charset="utf-8">
        <title>Ana Leal - Iniciar sesion</title>
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
        include 'plantillas/navbar.php'
        ?>
        <!-- Insertar navbar -->

         <!-- Page Header Start -->
         <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Iniciar Sesion</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        
        <!-- Registro Start -->
        
        <div class="contact" style="margin-bottom: 90px;">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form action="fun/validar.php" method="post">
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu Correo" required="required" data-validation-required-message="Por favor ingresa tu Correo" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="pass" class="form-control" id="pass" name="pass" placeholder="Ingresa tu Contraseña" required="required" data-validation-required-message="Por favor ingresa tu contrasena" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <input class="btn" type="submit" id="sendMessageButton" class="submit" value="Iniciar Sesion">
                                        <a class="btn" id="sendMessageButton" href="./registro.php">Registrarse aqui</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Insertar footer -->
        <?php
        include 'plantillas/footer.php'
        ?>
        <!-- Insertar footer -->

    </body>

</html>