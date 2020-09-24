<?php 

include_once '../../lib/connection.php';

$obj = new connection();

$conexion = $obj->getConnect();

$ciudad = $_GET['ciudad'];

$sql = "SELECT ciu_codigo,ciu_nombre,dep_nombre FROM ciudad,departamento WHERE tbldepartamento_dep_codigo=dep_codigo and (ciu_nombre LIKE '%".$ciudad."%' OR dep_nombre LIKE '%".$ciudad."%' )";

$ciudades = mysqli_query($conexion,$sql);

foreach ($ciudades as $ciudad) {
	echo "<tr>";
	echo "<td>".$ciudad['ciu_codigo']."</td>";
	echo "<td>".$ciudad['ciu_nombre']."</td>";
	echo "<td>".$ciudad['dep_nombre']."</td>";

	echo "<td><a href='editar_ciudad.php?ciu_codigo=".$ciudad['ciu_codigo']."'><button class='btn btn-primary'>Editar</button></a></td>";

	echo "<td><a href='eliminar_ciudad.php?ciu_codigo=".$ciudad['ciu_codigo']."'><button class='btn btn-danger'>Eliminar</button></a></td>";
	echo "</tr>";
}
?>