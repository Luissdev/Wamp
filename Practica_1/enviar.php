<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$mensaje = $_POST["mensaje"];

	echo "Hola mi nombre es $nombre, mi correo es $correo y mi mensaje es el siguiente <br> $mensaje";

	mail("luisg9410@gmail.com", "Calando ando", $mensaje)
 ?>
</body>
</html>