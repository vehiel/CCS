<?php 
require_once "conexion.php";
class Garantia
{
	
		private $con;
		
		private $cga_in;
		private $gar_vc;
		private $des_vc;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->$atributo;
		}
		public function insertarGarantia(){
			$statement = $this->con->consultaPreparada("CALL SPCCS09INGAR(?,?,?);");
			$statement->bind_param("iss",$this->cga_in,$this->gar_vc,$this->des_vc);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
		}

		public function listarGarantia(){
			$statement = $this->con->consultaPreparada("CALL SPCCS09LIGAR();");
			$statement->execute();
			if(!($resultado= $statement->get_result())){
				echo("<b>No obtuvieron los datos</b><br>".$statement->error);
			}
			$statement->close();
			$this->con->cerrarConexion();
			return $resultado;

		}
		public function actualizarGarantia(){
			$statement = $this->con->consultaPreparada("CALL SPCCS09UPGAR(?,?,?);");
			$statement->bind_param("iss",$this->cga_in,$this->gar_vc,$this->des_vc);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
		}
		
		public function eliminarGarantia($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS09DEGAR(?);");
			$statement->bind_param("i",$id);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
		}
		public function buscarGarantia($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS09SEGAR(?);");
			$statement->bind_param("i",$id);
			$statement->execute();
			if(!($resultado = $statement->get_result())){
				echo("<b>No obtuvieron los datos</b><br>");
			}
			$statement->close();
			$this->con->cerrarConexion();
			$row = mysqli_fetch_array($resultado);
			return $row;
		}
}
 ?>