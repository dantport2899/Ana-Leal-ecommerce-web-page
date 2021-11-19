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
        <link href="../css/tablaestilo.css" rel="stylesheet">

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

  <?php
        include '../plantillas/navbar-administradores.php'
        ?>
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


  </body>
</html>