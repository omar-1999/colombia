<?php 
include_once '../../controller/ciudad/consultar_ciudad.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Consultar Ciudad</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="../../web/css/bootstrap.css">
	<script type="text/javascript" src="../../web/js/jquery.js" ></script>
	<script type="text/javascript" src="../../web/js/bootstrap.js" ></script>
	<script type="text/javascript" src="../../web/js/globals.js" ></script>
</head>
<body class="p-3 mb-2 bg-info">
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<label><h4>Buscar:</h4></label>
			</div>
			<div class="col-md-3">
				<input type="text" name="camp_buscar" class="form-control validar" id="camp_buscar" placeholder="Buscar...">
			</div>
			<div class="col-md-3">
				<a href="insertar_ciudad.php"><button id="añadir" class="btn btn-secondary">A&ntilde;adir</button></a>
			</div>
		</div><br>
		<table class="table table-hover table-striped table-dark" border="1" cellpadding="0">
			<thead class="thead-dark">
				<tr>
					<th colspan="5">
						<center><h4>CIUDADES</h4></center>
					</th>
				</tr>
				<tr>
					<th>
						Codigo
					</th>
					<th>
						Nombre
					</th>
					<th>
						Departamento
					</th>
					<th>
						IMAGEN
					</th>
					<th colspan="2">
						<center>Acciones</center>
					</th>
				</tr>
			</thead>
			<?php 
			foreach ($ciudades as $ciudad) {
				echo "<tr>";
				echo "<td>".$ciudad['ciu_codigo']."</td>";
				echo "<td>".$ciudad['ciu_nombre']."</td>";
				echo "<td>".$ciudad['dep_nombre']."</td>";
				echo "<td><img src='".$ciudad['ciu_imagen']."' width='100' heigth='100'></td>";

				echo "<td><a href='editar_ciudad.php?ciu_codigo=".$ciudad['ciu_codigo']."'><button class='btn btn-primary'>Editar</button></a></td>";

				echo "<td><a href='eliminar_ciudad.php?ciu_codigo=".$ciudad['ciu_codigo']."'><button class='btn btn-danger'>Eliminar</button></a></td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
</body>
</html>