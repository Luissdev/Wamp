<?php 
$todo     = $_GET["todo"];
$titulo   = $_GET["titulo"];
$contenido= $_GET["contenido"];
$conexion = mysqli_connect("localhost", "root", "", "db_noticias");

echo $todo;
switch ($todo) {
	case 'insert':
	$insertar = "INSERT INTO noticias (titulo, contenido) VALUES ('$titulo', '$contenido')";
	mysqli_query($conexion, $insertar);
	echo "Se agrego la noticia correctamente :D";
	break;
	case 'update':
	echo "actualizando...";
	$id = $_GET["id"];
	$update = "UPDATE noticias SET contenido = '$contenido', titulo = '$titulo' WHERE id = '$id'";
	echo "$update";
	mysqli_query($conexion, $update);
	break;
	case 'delete':
	$delete = "DELETE FROM noticias WHERE titulo = '$titulo'";
	mysqli_query($conexion, $delete);
	echo "Se ha borrado exitosamente registro con el titulo '$titulo'";
	break;
	default:
	echo "";
	break;
}
?>
<a href="listar.php">Ver noticias</a>