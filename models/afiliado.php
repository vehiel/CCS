<?php 
require_once "conexion.php";
require_once "persona.php";
class Afiliado extends Persona
{
	
		private $con;
		
		protected $naf_in;
		protected $ncu_vc;
		protected $eac_in;
		protected $emo_in;
		protected $obs_vc;
		private $null = "NULL";
		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		public function insertarAfiliado(){
			$statement = $this->con->consultaPreparada("CALL SPCCS06INPERAFI(?,?,?,?,?,?,?,?,?,?,?,?,?);");
			$statement->bind_param("issssisssisis",$this->idp_in,$this->nom_vc,$this->ap1_vc,$this->ap2_vc,$this->tel_vc,$this->gen_in,$this->ema_vc,$this->dir_vc,$this->fna_dt,$this->naf_in,$this->ncu_vc,$this->emo_in,$this->obs_vc);
			$statement->execute();
			echo $statement->error;
			$statement->close();
			$this->con->cerrarConexion();
		}
		public function listarAfiliado(){
			$statement = $this->con->consultaPreparada("CALL SPCCS06LIPERAFI();");
			$statement->execute();
			if (!($resultado = $statement->get_result())) {
				echo "(" . $statement->errno . ") " . $statement->error;
			}
			return $resultado;
			$statement->close();
			$this->con->cerrarConexion();
		}
		public function actualizarAfiliado(){
			$statement = $this->con->consultaPreparada("CALL SPCCS06UPPERAFI(?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
			$statement->bind_param("issssisssisiis",$this->idp_in,$this->nom_vc,$this->ap1_vc,$this->ap2_vc,$this->tel_vc,$this->gen_in,$this->ema_vc,$this->dir_vc,$this->fna_dt,$this->naf_in,$this->ncu_vc,$this->eac_in,$this->emo_in,$this->obs_vc);
			$statement->execute();
			echo $statement->error;
			$statement->close();
			$this->con->cerrarConexion();
		}
		
		public function eliminarAfiliado($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS06DEPERAFI(?);");
			$statement->bind_param("i",$id);
			$statement->execute();
			echo $statement->error;
			$statement->close();
			$this->con->cerrarConexion();
		}
		
		public function buscarAfiliado($m,$id){
			if ($m=="editar") {
				$statement = $this->con->consultaPreparada("CALL SPCCS06SECEPERAFI(?);");
				$statement->bind_param("i",$id);
				//echo "en editar USUARIO";
			}else {
				// $null = 'NULL';
				$statement = $this->con->consultaPreparada("CALL SPCCS06SEPERAFI(?,?,?);");
				$statement->bind_param("iss",$id,$this->null,$this->null);
				//echo "en else USUARIO";
			}
			
			
			$statement->execute();
			if(!($resultado = $statement->get_result()))
			{echo("<b>No  se obtuvieron los datos</b><br>"."(" . $statement->errno . ") " . $statement->error);}
			$statement->close();
			$this->con->cerrarConexion();
			$row = mysqli_fetch_array($resultado);
			return $row;
		}
		public function actualizarEAC($id){
			
			$statement = $this->con->consultaPreparada("CALL SPCCS06UPINPERAFI(?,?);");
			$statement->bind_param("is",$id,$this->null);
			$statement->execute();
			echo $statement->error;
			$statement->close();
			$this->con->cerrarConexion();
		}
}
 ?>