<?php 

include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$ciudad = $_POST['ciudad'];
$dep_codigo = $_POST['dep_codigo'];

$imagen = $_FILES['ciu_imagen']['name'];

$ruta = "../../web/img/$imagen";

move_uploaded_file($_FILES['ciu_imagen']['tmp_name'],$ruta);

$sql = "INSERT INTO ciudad VALUES (NULL, '".$ciudad."','".$dep_codigo."','".$ruta."')";

$ejecucion = mysqli_query($conexion,$sql);

if (!$ejecucion) {
	echo "<script type='text/javascript'> window.location.href='../../view/ciudad/insertar_ciudad.php'</script>";
	echo "Error en la Insercion";
}else{
	echo "<script type='text/javascript'> window.location.href='../../view/ciudad/consultar_ciudad.php'</script>";
}
?>