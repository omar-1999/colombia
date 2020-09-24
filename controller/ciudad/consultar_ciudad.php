<?php 

include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$sql_c = "SELECT ciu_codigo,ciu_nombre,dep_nombre,ciu_imagen FROM ciudad,departamento WHERE tbldepartamento_dep_codigo = dep_codigo";

$sql_d = "SElECT * FROM departamento";

$ciudades = mysqli_query($conexion,$sql_c);
$departamentos = mysqli_query($conexion,$sql_d);

?>