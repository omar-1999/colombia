<?php 

include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$ejecucion_dos=null;

$ciu_codigo = $_POST['ciu_codigo'];

if (isset($_POST['ciu_nombre'])) {
	$ciu_nombre = $_POST['ciu_nombre'];

	$sql_c = "UPDATE ciudad SET ciu_nombre='".$ciu_nombre."' WHERE ciu_codigo=$ciu_codigo";

	$ejecucion_uno = mysqli_query($conexion,$sql_c);
}

if (!$_POST['dep_codigo']==null) {
	$dep_codigo = $_POST['dep_codigo'];

	$sql_cd = "UPDATE ciudad SET tbldepartamento_dep_codigo='".$dep_codigo."' WHERE ciu_codigo=$ciu_codigo";

	$ejecucion_dos = mysqli_query($conexion,$sql_cd);
}

if (!$ejecucion_uno) {
	//echo mysqli_error($conexion);
	echo "<script type='text/javascript'>alert('$conexion')</script>";
	echo "<script type='text/javascript'> window.location.href='../../view/ciudad/editar_ciudad.php'</script>";
}else{
	echo "<script type='text/javascript'>alert('$ciu_nombre Actualizada Correctamente')</script>";
	echo "<script type='text/javascript'> window.location.href='../../view/ciudad/consultar_ciudad.php'</script>";
}
?>