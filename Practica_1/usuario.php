<?php 
	class Usuario{
		private $nombre;
		private $clave;


		function __construct(){
			$this->nombre = "";
			$this->clave = "";
		}

		public function setNombre($nom){
			$this->nombre = $nom;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setClave($cla){
			$this->clave=$cla;
		}

		public function getClave(){
			return $this->clave;
		}

	}
 ?>