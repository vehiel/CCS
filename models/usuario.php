<?php 

require_once "conexion.php";
require_once "persona.php";
class Usuario extends Persona
{
	
		private $con;
		//usuario
		//protected $idp_in;
		protected $nus_in;
		protected $est_in;
		protected $con_vc;
		protected $idr_in;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		// public function get($atributo){
		// 	return $this->$atributo;
		// }
		public function insertarUsuario(){
				// echo "idp_in ".$this->idp_in. "<br>";
				// echo "nom_vc ".$this->nom_vc. "<br>";
				// echo "ap1_vc".$this->ap1_vc. "<br>";
				// echo "ap2_vc ".$this->ap2_vc. "<br>";
				// echo "tel_vc ".$this->tel_vc. "<br>";
				// echo "gen_in ".$this->gen_in. "<br>";
				// echo "ema_vc ".$this->ema_vc. "<br>";
				// echo "fna_dt ".$this->fna_dt. "<br>";
				// echo "dir_vc ".$this->dir_vc. "<br>";
				// echo "nus_in ".$this->nus_in. "<br>";
				// echo "est_in ".$this->est_in. "<br>";
				// echo "con_vc ".$this->con_vc. "<br>";
				// echo "idr_in ".$this->idr_in. "<br>";
			$statement = $this->con->consultaPreparada("CALL SPCCS02INPERUSU(?,?,?,?,?,?,?,?,?,?,?,?,?);");
			$statement->bind_param("issssisssisii",$this->idp_in,$this->nom_vc,$this->ap1_vc,$this->ap2_vc,$this->tel_vc,$this->gen_in,$this->ema_vc,$this->dir_vc,$this->fna_dt,$this->nus_in,$this->con_vc,$this->est_in,$this->idr_in);
			$statement->execute();
			echo $statement->error;
			$statement->close();
			$this->con->cerrarConexion();
			//$sql = "INSERT INTO `ccs02usu` (IDP_01IN,   NUS_02IN,           CON_02VC, EST_02IN, IDR_03IN) VALUES('{$this->idp_in}','{$this->nus_in}','{$this->con_vc}', '{$this->est_in}','{$this->idr_in}');";
			
			}
		public function listarUsuario(){
			$estado ='1';
			$datos = $this->con->consultaRetorno("CALL SPCCS02LIPERUSU($estado);");
			$this->con->cerrarConexion();
			return $datos;
		}
		public function actualizarUsuario(){

			$statement = $this->con->consultaPreparada("CALL SPCCS02UPPERUSU(?,?,?,?,?,?,?,?,?,?,?,?);");
			$statement->bind_param("issssisssiii",$this->idp_in,$this->nom_vc,$this->ap1_vc,$this->ap2_vc,$this->tel_vc,$this->gen_in,$this->ema_vc,$this->dir_vc,$this->fna_dt,$this->nus_in,$this->est_in,$this->idr_in);
			$statement->execute();
			echo $statement->error;
			$statement->close();
			$this->con->cerrarConexion();
		}
		
		public function eliminarUsuario($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS02DEPERUSU(?);");
			$statement->bind_param("i",$id);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
			
		}
		public function buscarUsuario($m,$id){
			if ($m=="editar") {
				$statement = $this->con->consultaPreparada("CALL SPCCS02SECEPERUSU(?);");
				$statement->bind_param("i",$id);
				//echo "en editar USUARIO";
			}else {
				$null = 'NULL';
				$statement = $this->con->consultaPreparada("CALL SPCCS02SEPERUSU(?,?,?);");
				$statement->bind_param("iss",$id,$null,$null);
				//echo "en else USUARIO";
			}
			$statement->execute();
			if(!($resultado = $statement->get_result()))
			{echo("<b>No  se obtuvieron los datos</b><br>"."(" . $statement->errno . ") " . $statement->error);}
			$statement->close();
			$this->con->cerrarConexion();
			$row = mysqli_fetch_array($resultado);
			return $row;
			// var_dump($row);
		}
		public function actualizarCon($idp,$con){
			$null = "NULL";
			$statement = $this->con->consultaPreparada("CALL SPCCS02UPUSUCON(?,?,?);");
			$statement->bind_param("iis",$idp,$null,$con);
			$statement->execute();
			echo "(" . $statement->errno . ") " . $statement->error;
			$statement->close();
			$this->con->cerrarConexion();
			
		}
}
 ?>