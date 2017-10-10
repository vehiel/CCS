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
		public function insert(){
			$conn = new mysqli("localhost", 
									"root", 
									"ccs123",
									"dbccs");
			$id=504080764;
			$nombre='Penechan';
			$ap1='AP1';
			$ap2='AP2';
			$tel='87221859';
			$gen=1;
			$ema='pene@gmail.com';
			$dir='por ahi';
			$fna='1996-01-15';
			$nsu=987;
			$nic='usuario345';
			$pas='penepass';
			$idr=3;
			$statement = $conn->prepare("CALL SPCCS02INPERUSU(?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$statement->bind_param("issssississi",$id,$nombre,$ap1,$ap2,$tel,$gen,$ema,$dir,$fna,$nsu,$nic,$pas,$idr);
			$statement->execute();
			$statement->close();
			echo "datos guardados, vaya a revisar... esclavo";

		}
		public function insertPersonasimple(){
			$id=504080765;
			$nombre='Penechan';
			$ap1='AP1';
			$ap2='AP2';
			$tel='87221859';
			$gen=1;
			$ema='pene@gmail.com';
			$dir='por ahi';
			$fna='1996-01-15';
			$nsu=987;
			$nic='usuario345';
			$pas='penepass';
			$idr=3;
			$statement = $this->con->prepare("CALL SPCCS01IN(?,?,?,?,?,?,?,?,?)");
			$statement->bind_param("issssisss",$id,$nombre,$ap1,$ap2,$tel,$gen,$ema,$dir,$fna);
			// $statement = $conexion->prepare("CALL SPCCS02INPERUSU(?,?,?,?,?,?,?,?,?,?,?,?,?)");
			// $statement->bind_param("issssisssissi",$id,$nombre,$ap1,$ap2,$tel,$gen,$ema,$dir,$fna,$nsu,$nic,$pas,$idr);

		
		$statement->execute();
		printf("%d Row inserted.\n", $statement->affected_rows);
		$statement->close();
		$this->con->close();
		
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