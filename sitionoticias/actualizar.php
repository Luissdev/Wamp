<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar noticia</title>
</head>
<body>
	<?php 
	$id       = $_GET["id"];
	$titulo   = $_GET["titulo"];
	$contenido= $_GET["contenido"];

	?>
	<form action="agregando.php" method="GET">
	<input type="text" name="id" value="<?php echo $id ?>" hidden="yes">
	<input type="text" name="todo" value="update" hidden="yes">
		<p>Titulo</p>
		<input name = "titulo" type="text" value="<?php echo $titulo ?>">
		<p>Contenido</p> 
		<textarea name="contenido" id="" cols="30" rows="10"><?php echo $contenido ?></textarea>
		<input type="submit" value="Actualizar">
	</form>
</body>
</html>