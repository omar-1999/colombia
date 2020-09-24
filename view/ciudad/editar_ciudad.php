<?php
include_once '../../lib/connection.php';

$obj = new Connection();

$conexion = $obj->getConnect();

$ciu_codigo = $_GET['ciu_codigo'];

$sql="SELECT * FROM ciudad WHERE ciu_codigo = $ciu_codigo";

$sql_d = "SElECT * FROM departamento";

$ciudad=mysqli_query($conexion,$sql);
$departamentos=mysqli_query($conexion,$sql_d);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ciudad</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="../../web/css/bootstrap.css">
	<script type="text/javascript" src="../../web/js/bootstrap.js" ></script>
	<script type="text/javascript" src="../../web/js/jquery.js" ></script>
</head>
<body class="p-3 mb-2 bg-info">
	<?php foreach ($ciudad as $cdd) {

		?>
		<br><br>
		<div class="container">
			<div class="jumbotron">
				<label class="display-4">Editar Ciudad</label>
			</div>
			<form action="../../controller/ciudad/editar_ciudad.php" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label><h4>Ciudad</h4></label>
						<input type="hidden" name="ciu_codigo" value="<?php echo $cdd['ciu_codigo'];?>">
						<input class="form-control" type="text" name="ciu_nombre" maxlength="30" value="<?php echo $cdd['ciu_nombre'];?>">
					</div>
					<div class="form-group col-md-4">
						<label><h4>Departamento</h4></label>
						<select class="form-control" name="dep_codigo">
							<option value="">Seleccione...</option>
							<?php foreach ($departamentos as $dept) {
								if ($dept['dep_codigo'] == $cdd['tbldepartamento_dep_codigo']) {
									echo "<option value='".$dept['dep_codigo']."' selected>".$dept['dep_nombre']."</option>";
								}else{
									echo "<option value='".$dept['dep_codigo']."'>".$dept['dep_nombre']."</option>";
								}
							} ?>
						</select>
					</div>
				</div>
				<input type="submit" class="btn btn-secondary" name="Enviar" value="Enviar"> &nbsp;
				<a href="consultar_ciudad.php"><button type="button" class="btn btn-primary">Volver</button></a>
			</form>
		</div>
	<?php } ?>
</body>
</html>