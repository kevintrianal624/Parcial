<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registrado Blog</title>
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
	
	<div class="container">
		<?php
			if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['telefono']) && !empty($_POST['telefono'])){
		
				$nombreregistrado=$_POST['nombre'];
				$telefonoregistrado=$_POST['telefono'];

				$db = "registros";
				$host = "localhost";
				$pw = "";
				$user = "root";
		
				$con = new mysqli($host,$user,$pw,$db) or die("No se realizo la conexion a la Base de Datos");
				$con->query("INSERT INTO usuarios(nombre,telefono) values ('$nombreregistrado','$telefonoregistrado')");
				
				echo "<h1>Datos Almacenados</h1><br>";
				echo "<div class='container row'><input type='button' class='btn btn-primary' value='Cerrar Ventana' onclick='window.close()'></div>";
				echo "<br>";
		?>
	</div>

	<footer>
		<div class="container">
			<h3>Liliana Colon</h3>
			<p>
				APIS Redes Sociales
			</p>
		</div>
	</footer>

	<?php
	return $con;
		
			}else{
				echo "Se deben llenar todos los campos.";
			}
	?>

	<script src="jquery.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>