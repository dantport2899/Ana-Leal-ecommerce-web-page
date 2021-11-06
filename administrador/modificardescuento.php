<?php
//cargar la sesion
session_start();

 ?>
 
<html>
<head>
        <meta charset="utf-8">
        <title>Ana Leal - Agregar Prenda</title>
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
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
        
        
    </head>

    <body>
        <!-- Insertar navbar -->
        <?php
        include '../plantillas/navbar-administradores.php'
        ?>
        <!-- Insertar navbar -->

        <!-- Consulta bd -->
        <?php
            $iddescuento = $_POST['iddesc'];
            require("../fun/connect_db.php");
            $sqldesc="SELECT * FROM descuentos where iddescuento='$iddescuento'";
            $resultdesc=mysqli_query($conexion,$sqldesc);

            while ($desc=mysqli_fetch_array($resultdesc)) {
                        $nombred=$desc['nom_descuento'];
                        $descripciond=$desc['descripcion'];
                        $descuentod=$desc['descuento'];
                                               
                        
            }                               
        ?>

        <!-- Consulta bd -->



         <!-- Page Header Start -->
         <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Modificar <?php $nombred ?> </h2>
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
                            <form action="../fun/agregardescuento.php" method="POST" enctype="multipart/form-data" >
                                <p>Nombre</p>
                                <div class="control-group">
                                        <input type="text" class="form-control" id="name" name="name" value=" <?php $nombre ?> " placeholder="Ingresa el nombre del descuento" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                        <p class="help-block text-danger"></p>
                                </div>
                                <p>Descripcion</p>
                                <div class="control-group">
                                        <input type="text" class="form-control" id="name" name="description" placeholder="Ingresa una breve descripcion" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                        <p class="help-block text-danger"></p>
                                </div>
                                <p>Porcentaje</p>
                                <div class="control-group">
                                        <input type="number" class="form-control" value="0" id="name" name="descuento" placeholder="Ingresa el porcentaje del descuento aplicado" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                        <p class="help-block text-danger"></p>
                                </div>
                                


                                
                                <div class="about-text">
                            
                                <a class="btn" href=""><input class="btn" id="sendMessageButton" type="submit" value="Agregar" ></a>

                                </div>

                                
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        

        <!-- Insertar footer -->
        <?php
        include '../plantillas/footer.php'
        ?>
        <!-- Insertar footer -->

    </body>

</html>