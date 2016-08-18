<!DOCTYPE html>
<html>
<head>
	<title>Objetos</title>
</head>
<body>


<?php 
	include("usuario.php");

	$usuario1 = new Usuario();
	$usuario1->setNombre("Luis");
	$usuario1->setClave("123");

	echo "Bienvenido ".$usuario1->getNombre()." su clave es: ".$usuario1->getClave();
 ?>
</body>
</html>