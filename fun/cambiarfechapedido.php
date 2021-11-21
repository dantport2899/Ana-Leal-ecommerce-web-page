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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            $id = $_POST['idd'];
            require("../fun/connect_db.php");
            $sqldesc="SELECT * FROM pedidos WHERE idpedidos=$id";
            $resultdesc=mysqli_query($conexion,$sqldesc);

            while ($desc=mysqli_fetch_array($resultdesc)) {
                        $descripcion=$desc['descripcion'];
                        $total=$desc['total'];
                        $status=$desc['status'];
                        $fecha=$desc['fecha'];
                        $fechaentrega=$desc['fechaentrega'];
                        $idpedidos=$desc['idpedidos'];                
                        
            }                               
        ?>

        <!-- Consulta bd -->



         <!-- Page Header Start -->
         <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Modificar la fecha del pedido: <?php echo $fecha ?> </h2>
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
                            <form action="../fun/actualizarfecha.php" method="POST" enctype="multipart/form-data" >
                                <div class="control-group">
                                <p>Fecha de solicitud: <?php echo $fecha ?></p>

                                <div class="control-group">
                                        <input type="date" class="form-control" id="name" name="fecha" value="<?php echo $fecha ?>"/>
                                        <p class="help-block text-danger"></p>
                                </div>

                                <p>Fecha de entrega: <?php echo $fechaentrega ?></p>
                                </div>

                                <input type="hidden" name="idpedidos" value="<?php echo $idpedidos ?>">

                                <div class="control-group">
                                <input type="date" class="form-control" id="name" name="fechaentrega" value="<?php echo $fechaentrega ?>"/>
                                        <p class="help-block text-danger"></p>
                                </div>

    
                            
                                <a class="btn" href="pedidos.php"><input class="btn" id="sendMessageButton" type="submit" value="Modificar" ></a>

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