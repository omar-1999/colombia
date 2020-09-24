<?php 
include_once '../../controller/ciudad/consultar_ciudad.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Insertar Ciudad</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="../../web/css/bootstrap.css">
	<script type="text/javascript" src="../../web/js/jquery.js" ></script>
	<script type="text/javascript" src="../../web/js/bootstrap.js" ></script>
</head>
<body class="p-3 mb-2 bg-info">
	<a href="consultar_ciudad.php"><button class="btn btn-secondary">Volver</button></a>
	<br><br>
	<div class="container">
		<form action="../../controller/ciudad/insert_ciudad.php" method="POST" enctype="multipart/form-data">
			<div class="jumbotron">
				<label class="display-4">A&ntilde;adir Ciudad</label>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label><h4>Ciudad</h4></label>
					<input type="text" name="ciudad" class="form-control" autofocus required>
				</div>
				<div class="form-group col-md-4">
					<label><h4>Departamento</h4></label>
					<select class="form-control" name="dep_codigo" required>
						<option>Seleccione...</option>
						<?php foreach ($departamentos as $dept) {
							echo "<option value='".$dept['dep_codigo']."'>".$dept['dep_nombre']."</option>";
						} ?>
					</select>
				</div>
				<div class="col-md-4">
					<label><h4>Imagen</h4></label>
					<input type="file" name="ciu_imagen">
				</div>
			</div>
			<input type="submit" class="btn btn-secondary" name="Enviar" value="Agregar">
		</form>
	</div>
</body>
</html>