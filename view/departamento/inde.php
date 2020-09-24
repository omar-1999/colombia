<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert Departament</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="../../web/css/bootstrap.css">
	<script type="text/javascript" src="../../web/js/bootstrap.js" ></script>
	<script type="text/javascript" src="../../web/js/jquery.js" ></script>
</head>
<body class="p-3 mb-2 bg-info">
	<a href="consultar.php"><button class="btn btn-secondary">Volver</button></a>
	<br><br>
	<form action="../../controller/departamento/insert.php" method="POST">
		<div class="container">
			<div class="jumbotron">
				<label class="display-4">A&ntilde;adir Departamento</label>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<h4>Departamento</h4><br>
					<input type="text" name="depto" class="form-control" autofocus required>
				</div>
			</div>
			
			<input type="submit" name="Enviar" value="Enviar" class="btn btn-secondary">
		</form>
	</div>
</body>
</html>