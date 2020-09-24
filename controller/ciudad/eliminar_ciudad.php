<?php 
include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$ciu_codigo = $_POST['ciu_codigo'];

$sql = "DELETE FROM ciudad WHERE ciu_codigo=$ciu_codigo";

$ejecucion = mysqli_query($conexion,$sql);

if (!$ejecucion) {
	echo mysqli_error($conexion);
}else{
	echo "<script type='text/javascript'> window.location.href='../../view/ciudad/consultar_ciudad.php'</script>";
}
?>