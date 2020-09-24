<?php 

include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$sql = "SElECT * FROM departamento";

$deptos = mysqli_query($conexion,$sql);

?>