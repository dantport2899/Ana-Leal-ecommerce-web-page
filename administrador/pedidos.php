<?php
//cargar la sesion
session_start();

 ?>
<html>
<head>
        <meta charset="utf-8">
        <title>Ana Leal - Inventario</title>
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
        <link href="../css/tablaestilo.css" rel="stylesheet">
        
    </head>

    <body>
        <!-- Insertar navbar -->
        <?php
        include '../plantillas/navbar-administradores.php'
        ?>
        <!-- Insertar navbar -->

         <!-- Page Header Start -->
         <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Pedidos pendientes</h2>
                    </div>
                    <div class="col-12">
                        <a href="nuevaprenda.php">Aceptar pedidos</a>
                        
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
                    $sql="SELECT * FROM pedidos";
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
                                <?php echo $estado ?>
                            </td>
                            <td>
                                <?php echo $fecha ?>
                            </td>
                            <td>
                                <?php echo $fechaEntrega ?>
                            </td>
                            <td>
                                <?php echo $total ?>
                            </td>
                            <td class="td-actions">
                                <form action="../fun/cambiarestadopedido.php" method="post">
                                    <input type="hidden" name="idd" value="<?php echo $id?>">
                                    <button class="btn btn-access" type="submit" name="btnAction" value="Modiciar">Cambiar estado del pedido</button>
                                </form>
                                <form action="../fun/eliminarpedido.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $id?>">
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

        <!-- Insertar footer -->
        <?php
        include '../plantillas/footer.php'
        ?>
        <!-- Insertar footer -->

    </body>

</html>