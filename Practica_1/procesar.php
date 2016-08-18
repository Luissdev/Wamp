<!DOCTYPE html>
<html>
<head>
	<title>Procesador</title>
</head>
<body>
	<h1>Datos recibidos</h1>
	<?php 
	echo "El nombre de la persona es: ". $_POST["nombre"] . $_POST["edad"] . $_POST["colonia"] ." y usted vive en el pais: ". $_POST["pais"];
	switch ($_POST["pais"]) {
		case 'mx':
			# code...
		echo "<br> Eres mexicano";
		break;
		case 'kr':
		echo "<br> Eres koreano";
		break;
		case 'ar':
		echo "<br> Eres Argentino";
		break;
		default:
		echo "A caray, como llegaste hasta aqui?";
		break;
	}
	?>
</body>
</html>