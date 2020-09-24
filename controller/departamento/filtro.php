<?php 
	
	include_once '../../lib/connection.php';

	$obj = new connection();

	$conexion = $obj->getConnect();

	$depto = $_GET['depto'];

	$sql = "SELECT * FROM departamento WHERE dep_nombre LIKE '%".$depto."%'";

	$deptos = mysqli_query($conexion,$sql);

	foreach ($deptos as $depto) {
		echo "<tr>";
		echo "<td>".$depto['dep_codigo']."</td>";
		echo "<td>".$depto['dep_nombre']."</td>";
		echo "<td><a href='editar.php?dep_codigo=".$depto['dep_codigo']."'><button class='btn btn-primary'>Editar</button></a></td>";
		echo "<td><a href='eliminar.php?dep_codigo=".$depto['dep_codigo']."'><button class='btn btn-danger'>Eliminar</button></a></td>";
		echo "</tr>";
	}
?>