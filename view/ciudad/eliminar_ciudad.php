<?php
include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$ciu_codigo = $_GET['ciu_codigo'];

$sql="SELECT * FROM ciudad WHERE ciu_codigo=$ciu_codigo";

$ciudad=mysqli_query($conexion,$sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Elimina Ciudad</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="../../web/css/bootstrap.css">
	<script type="text/javascript" src="../../web/js/bootstrap.js" ></script>
	<script type="text/javascript" src="../../web/js/jquery.js" ></script>
</head>
<body class="p-3 mb-2 bg-info">
	<?php 
	foreach ($ciudad as $cdd) {
		
		?>
		<a href="consultar_ciudad.php"><button class="btn btn-secondary">Volver</button></a>
		<br><br>
		<div class="container">
			<div class="jumbotron">
				<label class="display-4">Eliminar Ciudad</label>
			</div>
			<form action="../../controller/ciudad/eliminar_ciudad.php" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label><h4>Ciudad</h4></label>
						<input type="hidden" name="ciu_codigo" value="<?php echo $cdd['ciu_codigo'];?>">
						<input class="form-control" type="text" disabled name="ciu_nombre" maxlength="30" value="<?php echo $cdd['ciu_nombre'];?>">
					</div>
				</div>
				<button class="btn btn-secondary" type="submit" name="eliminar">Eliminar</button>
			</form>
		</div>
	<?php } ?>
</body>
</html>