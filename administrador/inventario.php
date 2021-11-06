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
                        <h2>Inventario</h2>
                    </div>
                    <div class="col-12">
                        <a href="nuevaprenda.php">Agregar Nueva Prenda</a>
                        
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
                            <th class="text-center">ID</th>
                            <th class="text-center"></th>
                            <th>Prenda</th>
                            <th class="th-description">Descripcion</th>
                            <th class="th-description">Departamento</th>                            
                            <th class="th-description">Talla</th>
                            <th class="th-description">Color</th>
                            <th class="th-description">Descuento aplicado</th>
                            <th class="text-right">Price</th>
                            <th class="th-description">Existencias</th>
                            <th class="text-right"></th>
                            
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    require("../fun/connect_db.php");
                    $sql="SELECT * FROM prendas";
                    $result=mysqli_query($conexion,$sql);

                    while ($fila=mysqli_fetch_array($result)) {
                        $idprenda=$fila['idprenda'];
                        $nombre=$fila['nom_prenda'];
                        $img_nombre=$fila['img_nombre'];
                        $imagen=$fila['img_archivo'];
                        $descripcion=$fila['descripcion'];
                        $departamento=$fila['iddepartamento'];
                        $talla=$fila['idtalla'];
                        $color=$fila['color'];
                        $estilo=$fila['idestilo'];
                        $existencias=$fila['existencias'];
                        $precio=$fila['precio'];
                        $descuento=$fila['iddescuento'];
                                            
                        ?>
                        <tr>
                            <td class="text-center">
                                <?php echo $idprenda ?>
                            </td>
                            <td>
                                <div class="img-container">
                                    <img src="<?php echo $imagen ?>" alt="...">
                                </div>
                            </td>
                            <td class="td-name">
                                <a href=""><?php echo $nombre ?></a>
                           </td>
                            <td>
                                <?php echo $descripcion ?>
                            </td>
                            <td >
                                <?php
                                     require("../fun/connect_db.php");
                                     $sql2="SELECT * FROM departamento WHERE iddepartamento=$departamento ";
                                     $result2=mysqli_query($conexion,$sql2);

                                     while ($dep=mysqli_fetch_array($result2)) {
                                        echo $dep['nom_departamento'];
                                     }
                                ?>
                            </td>
                            <td >
                                <?php
                                    require("../fun/connect_db.php");
                                    $sql3="SELECT * FROM talla WHERE idtalla=$talla ";
                                    $result3=mysqli_query($conexion,$sql3);

                                    while ($tallaprodcuto=mysqli_fetch_array($result3)) {
                                       echo $tallaprodcuto['nom_talla'];
                                    }
                                ?>
                            </td>
                            <td >
                                <?php echo $color?>
                            </td>
                            <td >
                                <?php 
                                    require("../fun/connect_db.php");
                                    $sql4="SELECT * FROM descuentos WHERE iddescuento=$descuento ";
                                    $result4=mysqli_query($conexion,$sql4);

                                    while ($descprodcuto=mysqli_fetch_array($result4)) {
                                       echo $descprodcuto['nom_descuento'];
                                    }
                                ?>
                            </td>
                            <td class="td-number text-right">
                                <small>$</small><?php echo $precio ?>
                            </td>
                            <td class="th-description">
                                <?php echo $existencias ?>
                            </td>
                            <td class="td-actions">
                                <form action="modificarprenda.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $idprenda ?>">
                                    <button class="btn btn-access" type="submit" name="btnAction" value="Modiciar">Modificar</button>
                                </form>
                                <form action="../fun/eliminarprenda.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $idprenda ?>">
                                    <input type="hidden" name="nombre" value="<?php echo $img_nombre ?>">
                                    <button width="300px" class="btn btn-danger" type="submit" name="btnAction" value="Eliminar ">Eliminar</button>
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