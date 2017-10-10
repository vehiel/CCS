<?php 


class Conexion
{
	private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "ccs123",
			"db" => "dbccs"
			);
	private $con;

		public function __construct(){
			//se pone el "\" adelante porque se usa namespace, y se con funde con una clase normal
			$this->con = new mysqli($this->datos['host'], 
									$this->datos['user'], 
									$this->datos['pass'],
									$this->datos['db']);
			if ($this->con->connect_errno) {
		 	
		 	echo $this->con->connect_error;
		 }
		}
		public function consultaPreparada($consulta){
			$statement = $this->con->prepare($consulta);
			return $statement;
		}
		public function consultaSimple($sql){
			$this->con->query($sql);
			//$this->con->close();

		}
		public function cerrarConexion(){
			$this->con->close();
		}
		public function consultaRetorno($sql){
			$datos = $this->con->query($sql);
			//$this->con->close();
			return $datos;
		}
}

 ?>