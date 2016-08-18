<!DOCTYPE html>
<html>
<head>
	<title>Practica 1</title>
</head>
<body>
	<?php 
	include("incluir.php");
	?>
	<h1>Bienvenido al sitio</h1>
	<p>Elija una opcion del menu</p>
	<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="formulario.php">Formulario</a></li>
		<li><a href="ciclofor.php">Ciclo for</a></li>
		<li><a href="ciclowhile.php">Ciclo while</a></li>
	</ul>

	<?php 
	negrita("este texto debe de estar en negritas");
	echo sumar(3,4);
	?>

	<?php 
	include("objetivo.txt");
	 ?>
</body>
</html>