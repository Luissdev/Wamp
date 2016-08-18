<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de mantenimiento</title>
</head>
<body>
	<?php 
	$conexion = mysqli_connect("localhost", "root", "", "db_noticias"); //host, usuario, clave, db
	$registros = mysqli_query($conexion, "SELECT * FROM noticias");
	while ($reg = mysqli_fetch_array($registros)) {
		echo "<h1>".$reg["titulo"]."<br></h1>";
		echo $reg["contenido"]."<br>";
		// echo "<a href=agregando.php?id=".$reg['id']."&ac='update'> Actualizar </a>";
		// echo "<a href=agregando.php?id=".$reg['id']."&ac='delete'> Eliminar </a>";
		echo $reg["titulo"];
		echo "<a href=actualizar.php?id=".$reg["id"]."&titulo=".$reg['titulo']."&contenido=".$reg['contenido']."> Acutalizar </a>";


		echo "<a href=agregando.php?titulo=".$reg["id"]."&todo=delete&contenido=1> Eliminar </a>";

		echo "<hr>";
	}
	?>
</body>
</html>