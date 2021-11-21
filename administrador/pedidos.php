<?php
//cargar la sesion
session_start();

 ?>
<html>
<head>
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                            <a class="nav-link " href="home-administrador.php" style="text-transform: uppercase;">Inicio</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link " href="inventario.php" style="text-transform: uppercase;">Inventario</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link active" aria-current="page" href="pedidos.php" style="text-transform: uppercase;">Pedidos</a>
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
                            <a class="nav-link" href="usuarioadmin.php" style="text-transform: uppercase;"><?php echo $_SESSION['username'] ?></a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="../fun/desconectar.php" style="text-transform: uppercase;">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- Insertar navbar -->

         <!-- Page Header Start -->
         <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Pedidos pendientes</h2>
                    </div>
                    <div class="col-12">
                        <a>Aceptar pedidos</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Tabla Start -->
     

        <div class="col-lg-12 col-md-12 ml-auto mr-auto">
                <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th class="th-description">ID pedido</th>
                            <th class="th-description">Clave transacción</th>
                            <th class="th-description">Correo</th>                            
                            <th class="th-description">Descripcion</th>
                            <th class="th-description">Estado</th>
                            <th class="th-description">Fecha</th>
                            <th class="th-description">Fecha de entrega</th>
                            <th class="th-description">Total</th>
                            <th class="text-right"></th>
                            
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    require("../fun/connect_db.php");
                    $sql="SELECT * FROM pedidos  ORDER BY cast(fecha as unsigned) DESC";
                    $result=mysqli_query($conexion,$sql);

                    while ($fila=mysqli_fetch_array($result)) {
                        $id=$fila['idpedidos'];
                        $claveTransaccion=$fila['clavetransaccion'];
                        $correo=$fila['correo'];
                        $descripcion=$fila['descripcion'];
                        $estado=$fila['status'];
                        $fecha=$fila['fecha'];
                        $fechaEntrega=$fila['fechaentrega'];
                        $total=$fila['total'];
                        ?>
                        <tr>
                            <td>
                                <?php echo $id?>
                            </td>
                            <td class="text-center">
                                <?php echo $claveTransaccion ?>
                            </td>
                            <td>
                                <?php echo $correo ?>
                            </td>
                            <td>
                                <?php echo $descripcion ?>
                            </td>
                            <td>
                              
                                <?php if($estado=="Cancelado"){?>
                                    <font color="red"><?php echo $estado; }?></font>
                                <?php} ?>

                                <?php if($estado=="Pendiente"){?>
                                    <font color="olive"><?php echo $estado; }?></font>
                                <?php} ?>

                                <?php if($estado=="Aprovado"){?>
                                    <font color="lime"><?php echo $estado; }?></font>
                                <?php} ?>

                                <?php if($estado=="En transito"){?>
                                    <font color="green"><?php echo $estado; }?></font>
                                <?php} ?>

                                <?php if($estado=="Entregado"){?>
                                    <font color="blue"><?php echo $estado; }?></font>
                                <?php} ?>
                            </td>
                            <td>
                                <?php echo $fecha ?>
                            </td>
                            <td>
                                <?php echo $fechaEntrega ?>
                            </td>
                            <td>
                                $<?php echo $total ?>
                            </td>
                            <td class="td-actions">
                                <form action="../fun/cambiarestadopedido.php" method="post">
                                    <input type="hidden" name="idd" value="<?php echo $id?>">
                                    <button class="btn btn-access" type="submit" name="btnAction" value="Modiciar">Cambiar estado del pedido</button>
                                </form>

                                <form action="../fun/cambiarfechapedido.php" method="post">
                                    <input type="hidden" name="idd" value="<?php echo $id?>">
                                    <button class="btn btn-access" type="submit" name="btnAction" value="Modiciar">Cambiar fecha del pedido</button>
                                </form>

                                <form action="../fun/eliminarpedido.php" method="post">
                                <input type="hidden" name="idpedidos" value="<?php echo $id?>">
                                    <input type="hidden" name="descripcion" value="<?php echo $descripcion ?>">

                                    <button width="300px" class="btn btn-danger" type="submit" name="btnAction" value="Eliminar ">Eliminar pedido</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>   
                    </tbody>
                </table>
                </div>
    
            </div>
        
     
        
        <!-- Tabla end -->

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