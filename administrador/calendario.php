<?php
//cargar la sesion
require("../fun/connect_db.php");
$sql="SELECT * FROM pedidos ORDER BY idpedidos";
$result=mysqli_query($conexion,$sql);

session_start();

//$conexion2 = new PDO('mysql:host=localhost;dbname=tienda_ropa','root','');
/*$data = array();
$query = "SELECT * FROM roles";
echo $query;
$statement = $conexion->prepare($query);
$statement->execute();
$result = $statement->get_result()->fetch_all();
echo $result;
*/

//$resultado = implode($result);
//echo $resultado;

/*
while ($data=mysqli_fetch_array($result)) {
    'id'=$data['id'];
    'title'=$data['title'];
    'start'=$data['start_event'];
    'end'=$data['end_event'];
}
*/



foreach($result as $row)
{
    $data[] = array(
        'id'=>$row["idpedidos"],
        'title'=>$row["descripcion"],
        'start'=>$row["fecha"],
        'end'=>$row["fechaentrega"]
    );
}


$datos = json_encode($data);
 ?>

<!DOCTYPE html>
<html lang='en'>
  <head>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
   

    <script>
        $(document).ready(function()  {
           var calendar = $('#calendar').fullCalendar({
               editable:true,
               header:{
                   left:'prev,next today',
                   center:'title',
                   right:'month,agendaWeek,agendaDay'
               },
               events: <?php echo json_encode($data);?>,
           });
        });


    </script>

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
                            <a class="nav-link " href="pedidos.php" style="text-transform: uppercase;">Pedidos</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link " href="descuentos" style="text-transform: uppercase;">Descuentos</a>
                        </li>
                        <li class="nav-item px-4">
                            <a class="nav-link active" aria-current="page" href="calendario" style="text-transform: uppercase;">Calendario</a>
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
  <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Calendario</h2>
                    </div>
                    <div class="col-12">
                        <a href="calendario.php">Consulta de pedidos</a>
                        
                    </div>
                </div>
            </div>
        </div>

      <div class="container">
    <div id="calendar"></div>
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