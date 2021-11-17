<!DOCTYPE html>
<html lang='en'>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function()  {
           var calendar = $('#calendar').fullCalendar({
               editable:true,
               header:{
                   left:'prev,next today',
                   center:'title',
                   right:'month,agendaWeek,agendaDay'
               },
               events:'load.php',
               
           });
        });
    </script>

  </head>
  <body>
      <h2>- Calendario de citas -</h2>
      <div class="container">
    <div id="calendar"></div>
    </div>
  </body>
</html>