<?php 

include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$depto = $_POST['depto'];

$sql = "INSERT INTO departamento VALUES (NULL, '".$depto."')";

$ejecucion = mysqli_query($conexion,$sql);

if (!$ejecucion) {
	echo "<script type='text/javascript'> window.location.href='../../view/departamento/inde.php'</script>";
	echo "Error en la Insercion";
}else{
	echo "<script type='text/javascript'> window.location.href='../../view/departamento/consultar.php'</script>";
}

?>