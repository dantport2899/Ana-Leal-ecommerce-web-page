<?php
//cargar la sesion
session_start();
require("../fun/connect_db.php");

$data = array();
$query = "SELECT * FROM pedidos ORDER BY idpedidos";
$statement = $connect -> prepare($query);
$statement ->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
    $data[] = array(
        'id' =>  $row["idpedidos"],
        'title' =>  $row["correo"],
        'start' =>  $row["fecha"],
        'end' =>  $row["fechadeentrega"]
    );
}

echo json_encode($data);

 ?>