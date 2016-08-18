<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sitio noticias</title>
</head>
<body>
	<h1>Nuestras noticias</h1>

	<?php 
	$conexion = mysqli_connect("localhost", "root", "", "db_noticias"); //host, usuario, clave, db
	$registros = mysqli_query($conexion, "SELECT * FROM noticias");
	while ($reg = mysqli_fetch_array($registros)) {
		echo "<h1>".$reg["titulo"]."<br></h1>";
		echo $reg["contenido"]."<br>";
		echo "<hr>";
	}
	?>
</body>
</html>