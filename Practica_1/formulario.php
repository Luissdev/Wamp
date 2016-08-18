<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

	<form method="POST" action="procesar.php">
		<label>Digite su nombre: </label>
		<input type="text" name="nombre">
		<label>Ingrese su edad: </label>
		<input type="text" name="edad">
		<label>Ingrese su e-mail: </label>
		<input type="email" name="colonia" required>
		<p>Ingrese su pais: </p>
		<select type="text" name="pais">
			<option value="mx">Mexico</option>
			<option value="kr">Korea</option>
			<option value="ar">Argentina</option>
		</select>
		<input type="submit" name="" value="Enviar">
	</form>

</body>
</html>