<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Formulario Blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>API</h1>
			<p>Ejemplo mi API</p>
		</div>
	</header>
	<div class="container contaform">
		<form action="registrado.php" method="post" name="formulario" class="">
			<div class="form-group">
				<label for="nombre">Nombre: </label>
				<input type="text" class="form-control" name="nombre" required="" placeholder="Ingrese el Nombre">
			</div>
		
			<div class="form-group">
				<label for="telefono">Telefono: </label>
				<input type="text" class="form-control" name="telefono" required="" placeholder="Ingrese el Telefono">
			</div>
		
			<div class="form-group">
				<button class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>

	<footer>
		<div class="container">
			<h3>Liliana Colon</h3>
			<p>
				APIS Redes Sociales
			</p>
		</div>
	</footer>

	<script src="jquery.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>