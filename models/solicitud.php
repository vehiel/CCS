<?php 
require_once "conexion.php";
require_once "persona.php";
class Solicitud
{
	
		private $con;
		
		private $nso_in;
		private $naf_in;
		private $idi_in;
		private $cga_in;
		private $fso_dt;
		private $fre_dt;
		private $fap_dt;
		private $est_in;
		private $mca_fl;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->$atributo;
		}
		public function insertarSolicitud(){
			// echo "nso_in: ".$this->nso_in."<br>";
			// echo "naf_in: ".$this->naf_in."<br>";
			// echo "idi_in: ".$this->idi_in."<br>";
			// echo "cga_in: ".$this->cga_in."<br>";
			// echo "fso_dt: ".$this->fso_dt."<br>";
			// echo "fre_dt: ".$this->fre_dt."<br>";
			// echo "fap_dt: ".$this->fap_dt."<br>";
			// echo "est_in: ".$this->est_in."<br>";
			// echo "mca_fl: ".$this->mca_fl."<br>";
			$statement = $this->con->consultaPreparada("CALL SPCCS10INSOL(?,?,?,?,?,?);");
			$statement->bind_param("iiiiid",$this->nso_in,$this->naf_in,$this->idi_in,$this->cga_in,$this->est_in,$this->mca_fl);
			$statement->execute();
			echo $statement->error;
			$statement->close();
			$this->con->cerrarConexion();
		}

		public function listarSolicitud(){
				$sql = "CALL SPCCS10LISOL();";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
			// $row = mysqli_fetch_array($datos);
			// var_dump($row);
			$datos->close();

			$this->con->cerrarConexion();

		}
		public function actualizarSolicitud(){
			$statement = $this->con->consultaPreparada("CALL SPCCS10UPSOL(?,?,?,?,?,?,?,?,?);");
			$statement->bind_param("iiiisssid",$this->nso_in,$this->naf_in,$this->idi_in,$this->cga_in,$this->fso_dt,$this->fre_dt,$this->fap_dt,$this->est_in,$this->mca_fl);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();

		}
		
		public function eliminarSolicitud($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS10DESOL(?);");
			$statement->bind_param("i",$id);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
		}
		public function buscarSolicitud($m,$idSol){
			if ($m=="editar")
			{
				$statement = $this->con->consultaPreparada("CALL SPCCS10SENSSOL(?);");
				$statement->bind_param("i",$idSol);
			}
			else if($m=="ver"){
				$null = "NULL";
				$statement = $this->con->consultaPreparada("CALL SPCCS10SESOL(?,?,?,?);");
				$statement->bind_param("ssis",$null,$null,$idSol,$null);
			}
			$statement->execute();
			if(!($resultado = $statement->get_result())){
				echo("<b>No  se obtuvieron los datos</b><br>"."(" . $statement->errno . ") " . $statement->error);
			}
			$statement->close();
			$this->con->cerrarConexion();
			$row = mysqli_fetch_array($resultado);
			//var_dump($row);
			return $row;
		}
		public function aprovarSolicitud(){
			$null = "NULL";
			$statement = $this->con->consultaPreparada("CALL SPCCS10UPAPSOL(?,?);");
			 $statement->bind_param("is",$this->nso_in,$null);
			$statement->execute();
			echo "(" . $statement->errno . ") " . $statement->error;
			$statement->close();
			$this->con->cerrarConexion();
		}
}
 ?>