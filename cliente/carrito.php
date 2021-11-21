
<?php

//cargar la sesion
session_start();

include('../fun/connect_db.php');

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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                            <a class="nav-link "  href="cliente-index.php" style="text-transform: uppercase;">Inicio</a>
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
                            <a class="nav-link" href="cliente-index.php#ELFOOTER" style="text-transform: uppercase;">Contáctanos</a>
                        </li>
                        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="text-transform: uppercase;"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username']; ?>
                                </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="usuario.php">Ir a perfil</a></li>
                                        <li><a class="dropdown-item" href="pedidos.php" >Revisar pedidos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">Cerrar sesión</a></li>
                                    </ul>
                            </li>
                        </ul>

                        </li>
                        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" aria-current="page" style="text-transform: uppercase;"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Carrito[<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>]
                                </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item"  href="carrito.php" >Ver Carrito</a></li>
                                        <li><a class="dropdown-item" href="../fun/vaciarcarrito.php">Limpiar carrito</a></li>
                                    </ul>
                            </li>
                        </ul>
                        
                    </ul>
                    </ul> 
                </div>
            </nav>
            <br><br><br><br><br><br><br>
        <!-- Insertar navbar -->

        <?php
          if (!empty($_SESSION['CARRITO']))
          {

       ?>

<div class="col-lg-12 col-md-12 ml-auto mr-auto">
                <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            
                            <th class="text-center"></th>
                            <th>Prenda</th>
                            <th class="th-description">Descripcion</th>
                            <th class="th-description">Color</th>
                            <th class="th-description text-right">Tamano</th>
                            <th class="text-center">Precio</th>
                            <th class="th-description">Cantidad</th>
                            <th class="text-center">Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $total=0;
                            foreach ($_SESSION['CARRITO'] as $indice=>$producto) {?>
          
                        <tr>
                            <td class="td-number text-center">
                           
                            </td>
                            <td>
                                <div class="img-container">
                                    <img src="<?php echo $producto['IMAGEN']; ?>" width = "100" height = "100" alt="...">
                                </div>
                            </td>
                            <td class="td-name">
                                <a ><?php echo $producto['NOMBRE']; ?></a>
                               
                            </td>
                            <td>
                                <?php echo $producto['COLOR']; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $producto['TALLA']; ?>
                            </td>
                            <td class="td-number text-center">
                                $<STrong><?php echo $producto['PRECIO']; ?></STrong>
                            </td>
                            <td class="td-number">
                                <?php echo $producto['CANTIDAD']; ?>
                                
                            </td>
                            <td class="td-number text-center">
                                $<STrong><?php echo $producto['PRECIO'] * $producto['CANTIDAD']; ?></STrong>
                            </td>
                            <td class="td-actions">
                                <form action="../fun/carritoeliminar.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $producto['ID']; ?>">
                                    <button type="submit" rel="tooltip" data-placement="left" title="" class="btn btn-link" data-original-title="Remove item">
                                        <i class="material-icons">Eliminar</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>

                    <tr>
                    <?php
                        if (!empty($_SESSION['CARRITO']))
                        {
                        $total=0;
                        foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
                            $total=$total+($producto['CANTIDAD']*$producto['PRECIO']);
                            }
                        } ?>

                        <td colspan="6" align="right"><h3>Total</h3></td>
                        <td colspan="2" align="right"><h3>$<?php  echo number_format($total,2);?></h3></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="9">
                            
                        <form action="pagar.php" method="POST">
                            <div class="alert alert-success">
                                <div class="form-group">
                                <label for="my-imput"></label>
                                <input id="email" name="email" class="form-control" type="email" placeholder="Por favor ingresa tu correo" required>
                                <br>
                                
                                <input id="direccion" name="direccion" class="form-control" type="text" placeholder="Por favor ingresa tu Direccion" required>


                                </div>
                                <small id="emailHelp" class="form-text text-muted">
                                    Los productos se enviaran a esta direccion
                                </small>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAction" value="proceder">
                                Proceder a pagar >>
                            </button>
                            
                        </form>
                        </td>
                    </tr>
                        
                    </tbody>
                </table>
                </div>
    
            </div>

        <!-- Insertar tabla -->

        

        

        <!-- si el carrito esta vacio mostrar esto -->
            <?php }else { ?>
        <div class="aler alert-success">
            No hay productos en el carrito...
        </div>

        <?php } ?>



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
   
   
        
      
  </body>
</html>