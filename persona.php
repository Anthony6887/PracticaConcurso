<?php
include_once "conexion.php";

$con = Conexion::conectar();
$sql = "SELECT * FROM personas";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll();
echo json_encode($result);



?>