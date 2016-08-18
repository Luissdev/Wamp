<?php
require_once 'producto.entidad.php';
require_once 'models/producto.php';

// Logica
$alm = new Producto();
$model = new ModeloProducto();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'actualizar':
		$alm->__SET('id', $_REQUEST['id']);
		$alm->__SET('nombre', $_REQUEST['nombre']);
		$alm->__SET('categoria', $_REQUEST['categoria']);
		$alm->__SET('inventario', $_REQUEST['inventario']);
		$alm->__SET('precio', $_REQUEST['precio']);

		$model->Actualizar($alm);
		header('Location: productos.php');
		break;

		case 'registrar':
		$alm->__SET('nombre', $_REQUEST['nombre']);
		$alm->__SET('categoria', $_REQUEST['categoria']);
		$alm->__SET('inventario', $_REQUEST['inventario']);
		$alm->__SET('precio', $_REQUEST['precio']);

		$model->Registrar($alm);
		header('Location: productos.php');
		break;

		case 'eliminar':
		$model->Eliminar($_REQUEST['id']);
		header('Location: productos.php');
		break;

		case 'buscar':
		$alm->__SET('id', $_REQUEST['id']);
		$model->Buscar($alm);
		break;

		case 'editar':
		$alm = $model->Obtener($_REQUEST['id']);
		break;

	}
}
?>