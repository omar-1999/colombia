<?php 

include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$login = $_POST['login'];
$pass = $_POST['pass'];
$tipo_usuario = $_POST['tipo_usuario'];

$sql = "SELECT login,password,tipo_usuario FROM usuario WHERE login='".$login."' and password='".$pass."' and tipo_usuario='".$tipo_usuario."'";

$datos = mysqli_query($conexion,$sql);

$all = $login.$pass.$tipo_usuario;

foreach ($datos as $value) {
 	$value['login'];
 	$value['password'];
 	$value['tipo_usuario'];
}

$result = $value['login'].$value['password'].$value['tipo_usuario'];

if ($result==$all) {
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>Bienvenido</title>
		<link rel="stylesheet" type="text/css" href="stilo2.css"/>
	</head>
	<body>
		<h1 align="center" class="saludo" style="font-size: 190px">BIENVENIDO</h1>
	</body>
</html>
<?php
}else{
	echo "Error!";
}
?>