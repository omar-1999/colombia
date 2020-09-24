<?php
include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$dep_codigo = $_GET['dep_codigo'];

$sql="SELECT * FROM departamento WHERE dep_codigo=$dep_codigo";

$departamento=mysqli_query($conexion,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Colombia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="../../web/css/bootstrap.css">
	<script type="text/javascript" src="../../web/js/bootstrap.js" ></script>
	<script type="text/javascript" src="../../web/js/jquery.js" ></script>
</head>
<body class="p-3 mb-2 bg-info">
	<?php 
	foreach ($departamento as $depto) {
		
		?>
		<a href="consultar.php"><button class="btn btn-secondary">Volver</button></a>
		<br><br>
		<div class="container">
			<div class="jumbotron">
				<label class="display-4">Editar Departamento</label>
			</div>
			<form action="../../controller/departamento/editar.php" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<h4>DEPARTAMENTO</h4>
						<br>
						<input type="hidden" name="dep_codigo" value="<?php echo $depto['dep_codigo'];?>">
						<input class="form-control" type="text" name="dep_nombre" maxlength="30" value="<?php echo $depto['dep_nombre'];?>"><br>
					</div>
				</div>
				<button type="submit" name="Enviar" class="btn btn-secondary">Enviar</button>
			</form>
		</div>
	<?php } ?>
</body>
</html>