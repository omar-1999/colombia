<?php 
include_once '../../controller/departamento/conult.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Consultar Departament</title>
	<link rel="stylesheet" href="../../web/css/bootstrap.css">
	<script type="text/javascript" src="../../web/js/jquery.js"></script>
	<script type="text/javascript" src="../../web/js/bootstrap.js"></script>
	<script type="text/javascript" src="../../web/js/global.js"></script>
</head>
<body class="p-3 mb-2 bg-info">
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<label><h4>Buscar:</h4></label>
			</div>
			<div class="col-md-3">
				<input class="form-control" type="text" name="buscar" id="campoBuscar" placeholder="Buscar...">
			</div>
			<div class="col-md-3">
				<a href="inde.php"><button id="buscar" class="btn btn-secondary">A&ntilde;adir</button></a>
			</div>
		</div><br><br>
		<table class="table table-hover table-striped table-dark" border="1" cellspacing="0">
			<thead class="thead-dark">
				<tr>
					<th colspan="4"><center><h4>DEPARTAMENTOS</h4></center></th>
				</tr>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th colspan="2"><center>Acciones</center></th>
				</tr>
			</thead>
			<?php 
			foreach ($deptos as $depto) {
				echo "<tr>";
				echo "<td>".$depto['dep_codigo']."</td>";
				echo "<td>".$depto['dep_nombre']."</td>";
				echo "<td><a href='editar.php?dep_codigo=".$depto['dep_codigo']."'><button class='btn btn-primary'>Editar</button></a></td>";
				echo "<td><a href='eliminar.php?dep_codigo=".$depto['dep_codigo']."'><button class='btn btn-danger'>Eliminar</button></a></td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
</body>
</html>