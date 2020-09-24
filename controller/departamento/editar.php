<?php 

include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$dep_codigo = $_POST['dep_codigo'];
$dep_nombre = $_POST['dep_nombre'];

$sql = "UPDATE departamento SET dep_nombre='".$dep_nombre."' WHERE dep_codigo=$dep_codigo";

$ejecucion = mysqli_query($conexion,$sql);

if (!$ejecucion) {
	echo mysqli_error($conexion);
}else{
	echo "<script type='text/javascript'> window.location.href='../../view/departamento/consultar.php'</script>";
}
?>