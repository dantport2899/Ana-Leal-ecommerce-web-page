<?php
//cargar la sesion
session_start();
$id=$_SESSION['idusuario'];

include('../fun/connect_db.php');

$resultado = $conexion -> query("select * from usuarios where idusuario=".$id)or die($conexion->error);
  if(mysqli_num_rows($resultado)>0){
    $fila = mysqli_fetch_row($resultado);
    $nom_usuario = $fila[1];
    $correo = $fila[2];
    $username = $fila[3];
    $contrasena = $fila[4];
    $direccion = $fila[6];
    $telefono = $fila[7];


  }
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
                <a class="navbar-brand pr-3" href="home-administrador.php" style="font-family: Bodoni FS; font-size: 45px;" >ANA LEAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link " href="home-administrador.php" style="text-transform: uppercase;">Inicio</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="inventario.php" style="text-transform: uppercase;">Inventario</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="pedidos.php" style="text-transform: uppercase;">Pedidos</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="descuentos.php" style="text-transform: uppercase;">Descuentos</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="calendario.php" style="text-transform: uppercase;">Calendario</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="ayuda.php" style="text-transform: uppercase;">Ayuda</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                        <li class="nav-item px-2">
                            <a class="nav-link active" aria-current="page" href="usuarioadmin.php" style="text-transform: uppercase;"><?php echo $_SESSION['username'] ?></a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="../fun/desconectar.php" style="text-transform: uppercase;">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- Insertar navbar -->
<br><br>
         <!-- Page Header Start -->
         <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Modificar perfil Admin</h2>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="../src/logo.jpeg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        
                        <div class="about-text">
                            <form action="../fun/actualizaradmin.php" method="POST" enctype="multipart/form-data" >
                            <div class="control-group">
                                        Nombre:<input type="text" class="form-control" id="name" name="name" value="<?php echo $nom_usuario;?>" placeholder="Ingresa tu Nombre" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        Username:<input type="text" class="form-control" id="username" name="username" value="<?php echo $username;?>" placeholder="Ingresa tu Nombre de Usuario" required="required" data-validation-required-message="Por favor ingresa tu Nombre de ususario" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        Correo:<input type="email" class="form-control" id="email" name="email" value="<?php echo $correo;?>" placeholder="Ingresa tu Correo" required="required" data-validation-required-message="Por favor ingresa tu Correo" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                    <div class="control-group">
                                        Contraseña:<input type="pass" class="form-control" id="pass" name="pass" value="<?php echo $contrasena;?>" placeholder="Ingresa tu Contraseña" required="required" data-validation-required-message="Por favor ingresa tu contrasena" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    
                                    <div class="control-group">
                                        Telefono:<input type="text" class="form-control" id="tel" name="tel" value="<?php echo $telefono;?>" placeholder="Ingresa tu Telefono" required="required" data-validation-required-message="Por favor ingresa tu Telefono" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        Direccion:<input type="text" class="form-control" id="address" name="address" value="<?php echo $direccion;?>" placeholder="Ingresa tu nombre de Direccion" required="required" data-validation-required-message="Por favor ingresa tu Direccion" />
                                        <input type="hidden" class="form-control" id="rol" name="rol" value="2" required="required" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <input class="btn btn-outline-dark" type="submit" id="sendMessageButton" class="submit" value="Modificar datos">
                                        
                                    </div>

                                
                            </form>                            
                        </div>
                    </div>
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