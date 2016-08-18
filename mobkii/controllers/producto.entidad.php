<?php
class Producto
{
	private $id;
	private $nombre;
	private $categoria;
	private $inventario;
	private $precio;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}