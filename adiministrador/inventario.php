<?php
//cargar la sesion
session_start();

 ?>
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
        <table class="table-fill">
            <thead>
                <tr>
                    <th width="5%" class="text-left">ID</th>
                    <th width="30%" class="text-left">Nombre</th>
                    <th width="20%" class="text-left">Imagen</th>
                    <th width="30%" class="text-left">Descripcion</th>
                    <th width="20%" class="text-left">Departamento</th>
                    <th width="20%" class="text-left">Talla</th>
                    <th width="20%" class="text-left">Color</th>
                    <th width="20%" class="text-left">Estilo</th>
                    <th width="20%" class="text-left">Existencias</th>
                    <th width="20%" class="text-left">Precio</th>
                    <th width="20%" class="text-left">Galeria</th>
                    <th width="20%" class="text-left">Modificar</th>
                    <th width="20%" class="text-left">Eliminar</th>
                    
                </tr>
            </thead>
            <tbody class="table-hover">
                <tr>
                    
                <?php
                    require("../fun/connect_db.php");
                    $sql="SELECT * FROM prendas";
                    $result=mysqli_query($conexion,$sql);

                    while ($fila=mysqli_fetch_array($result)) {
                        $id=$fila['idprenda'];
                        $nombre=$fila['nom_prenda'];
                        $imagen=$fila['img_archivo'];
                        $descripcion=$fila['descripcion'];
                        $departamento=$fila['iddepartamento'];
                        $talla=$fila['idtalla'];
                        $color=$fila['color'];
                        $estilo=$fila['idestilo'];
                        $existencias=$fila['existencias'];
                        $precio=$fila['precio'];
                                            
                        ?>
                                                                                   
                        <td class="text-left"><?php echo $id ?></td>
                        <td class="text-left"><?php echo $nombre ?></td>
                        <td class="text-left"><img src="<?php echo $imagen ?>" class="card-img-top" alt="..."></td>
                        <td class="text-left"><?php echo $descripcion ?></td>
                        <td class="text-left"><?php echo $departamento ?></td>
                        <td class="text-left"><?php echo $talla ?></td>
                        <td class="text-left"><?php echo $color ?></td>
                        <td class="text-left"><?php echo $estilo ?></td>
                        <td class="text-left"><?php echo $existencias ?></td>
                        <td class="text-left"><?php echo $precio ?></td>

                        <th width="10%" class="text-center">
                            <form action="modificargaleria.php" method="post">
                                <button class="btn btn-danger" type="submit" name="btnAction" value="eliminar">Galeria</button>
                            </form>
                        </th>
                        <th width="10%" class="text-center">
                            <form action="modificargaleria.php" method="post">
                                <button class="btn btn-danger" type="submit" name="btnAction" value="eliminar">Modificar</button>
                            </form>
                        </th>
                        <th width="10%" class="text-center">
                            <form action="modificargaleria.php" method="post">
                                <button class="btn btn-danger" type="submit" name="btnAction" value="eliminar">Eliminar</button>
                            </form>
                        </th>
                   
                </tr>
               
                <?php } ?>
                
            </tbody>
        </table>

        
        <!-- Tabla end -->

        <!-- Insertar footer -->
        <?php
        include '../plantillas/footer.php'
        ?>
        <!-- Insertar footer -->

    </body>

</html>