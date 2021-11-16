
<?php

//cargar la sesion
session_start();

include('../fun/connect_db.php');
if(isset($_GET['id'])){
$resultado = $conexion -> query("select * from prendas where idprenda=".$_GET['id'])or die($conexion->error);
  if(mysqli_num_rows($resultado)>0){
    $fila = mysqli_fetch_row($resultado);
    $imagen = $fila[9];
  }else{
    header("Location: ../home-cliente.php");
  }
}
else{
  //redireccionar
  header("Location: ../home-cliente.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Detalles del Producto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        <link href="../css/hoverimages.css" rel="stylesheet">

        <!-- JS Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
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
                            <a class="nav-link active" aria-current="page"  href="cliente-index.php" style="text-transform: uppercase;">Inicio</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link " href="ropanovedades.php" style="text-transform: uppercase;">Novedades</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link " href="ropaboda.php" style="text-transform: uppercase;">Ropa&nbsp;de&nbsp;boda</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="ropaocasion.php" style="text-transform: uppercase;">Ropa&nbsp;de&nbsp;ocasión</a>
                        </li>
                        <li class="nav-item px4">
                            <a class="nav-link" href="ropaoferta.php" style="text-transform: uppercase;">Ropa&nbsp;en&nbsp;oferta</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link" href="contactanos.php" style="text-transform: uppercase;">Contáctanos</a>
                        </li>
                        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="text-transform: uppercase;"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username']; ?>
                                </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Ir a perfil</a></li>
                                        <li><a class="dropdown-item" href="#">Revisar pedidos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">Cerrar sesión</a></li>
                                    </ul>
                            </li>
                        </ul>

                        </li>
                        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="text-transform: uppercase;"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Carrito[<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>]
                                </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item"  href="carrito.php" >Ver Carrito</a></li>
                                        <li><a class="dropdown-item" href="#">Limpiar carrito</a></li>
                                    </ul>
                            </li>
                        </ul>
                        
                    </ul>
                    </ul> 
                </div>
            </nav>
            <br><br><br><br><br><br><br>

            <!-- Modal para cerrar sesión -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">¿Cerrar sesión?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <p>Cualquier pedido no confirmado se cancelará</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='../index.php'" onclick="window.location.href='../fun/desconectar.php'">Cerrar sesión</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Insertar navbar -->

          

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $imagen ?>" alt="<?php echo $fila[1];?>" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $fila[1];?></h2>
            <p><?php echo $fila[10];?></p>
            <p>
                <?php
                $descuento=$fila[12];

                if($descuento>1){ 
                    $resultado2 = $conexion ->query("select * from descuentos where iddescuento=$descuento")or die($conexion -> error);
                                while($fila2 = mysqli_fetch_array($resultado2)){
                                    $porcentaje=$fila2['descuento'];
                                    $porcentajenombre=$fila2['nom_descuento'];
                                    $desc=$porcentaje/100;
                                    $preciofinal=$fila[3]-($fila[3]*$desc);
                              
                ?>

                    <strong class="text-primary h4">$<?php echo $preciofinal; ?></strong>
                    <strike>$<?php echo $fila[3] ?></strike> <?php echo $porcentajenombre ?>
                <?php }}else{ 
                    $preciofinal=$fila[3];
                ?>
                    <strong class="text-primary h4">$<?php echo $preciofinal ?></strong>
                <?php } ?>
            </p>
            <div class="mb-1 d-flex">
              <p><strong>Stock:</strong> <?php echo $fila[11];?></p>
            </div>
            <p>
                <?php
                        require("../fun/connect_db.php");
                        $sql2="SELECT * FROM departamento WHERE iddepartamento='$fila[4]'";
                        $result2=mysqli_query($conexion,$sql2);

                        while ($dep=mysqli_fetch_array($result2)) {
                            echo $dep['nom_departamento'];
                        }
                ?>

            </p>
            <p><strong>Talla:</strong>
                <?php
                         require("../fun/connect_db.php");
                         $sql3="SELECT * FROM talla WHERE idtalla='$fila[2]' ";
                         $result3=mysqli_query($conexion,$sql3);

                         while ($tallaprodcuto=mysqli_fetch_array($result3)) {
                            $talla=$tallaprodcuto['nom_talla'];
                            echo $talla;
                         }
                ?>

            </p>
            <p><strong>Material:</strong>
                <?php
                         require("../fun/connect_db.php");
                         $sql4="SELECT * FROM material WHERE idmaterial='$fila[6]' ";
                         $result4=mysqli_query($conexion,$sql4);

                         while ($materialprodcuto=mysqli_fetch_array($result4)) {
                            echo $materialprodcuto['nom_material'];
                         }
                ?>

            </p>
            <p><strong>Color:</strong>
                <?php
                            echo $fila[5];                       
                ?>

            </p>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">


              <form action="../fun/carritofun.php" method="POST">
                <select name="cantidad" id="cant">
                    <?php
                    for($i=1;$i<=$fila[11];$i++){
                    ?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php
                    }
                    ?>
                </select>

                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                        <input type="hidden" name="nombre" value="<?php echo $fila[1];?>">
                        <input type="hidden" name="descripcion" value="<?php echo $fila[10];?>">
                        <input type="hidden" name="precio" value="<?php echo $preciofinal;?>">
                        <input type="hidden" name="imagen" value="<?php echo $imagen ?>">
                        <input type="hidden" name="color" value="<?php echo $fila[5] ?>">
                        <input type="hidden" name="talla" value="<?php echo $talla;?>">
                </div>
                <input type="submit"  class="buy-now btn btn-sm btn-primary" value="+ Agregar al Carrito">
            
            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br>

    <!-- Modal para cerrar sesión -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">¿Cerrar sesión?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <p>Cualquier pedido no confirmado se cancelará</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="window.location.href='../fun/desconectar.php'" onclick="window.location.href='../fun/desconectar.php'">Cerrar sesión</button>
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