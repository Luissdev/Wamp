<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insertar</title>
</head>
<body>
	<form action="agregando.php" method="GET">
	<p>¿Qué desea hacer?</p>
	<select name="todo" id="">
		<option value="insert">Insertar</option>
		<option value="update">Actualizar</option>
		<option value="delete">Eliminar</option>
	</select>
		<p>Titulo:</p>
		<input type="text" name="titulo">
		<p>Contenido:</p>
		<textarea name="contenido" id="" cols="30" rows="10"></textarea>
		<br>
		<input type="submit" value="Agregar noticia">
	</form>
	
</body>
</html>