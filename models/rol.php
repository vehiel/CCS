<?php 
	
	class Rol{
		private $con;

		private $idr_03in;
		private $rol_03vc;

		public function __construct(){
			$this->con = new Conexion();
		}
		public function insertarRol(){

		}
		public function listarRol(){
			$sql = "SELECT IDR_03IN, ROL_03VC FROM CCS03ROL";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
		
	}
 ?>