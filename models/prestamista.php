<?php 
require_once "conexion.php";
class Prestamista{
		private $con;
						//se cambio por private
		private $cpr_in;
		private $nom_vc;
		private $ian_fl;
		private $pmo_fl;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function insertarPrestamista(){
			$statement = $this->con->consultaPreparada("CALL SPCCS15INPRE(?,?,?,?);");
			$statement->bind_param("isdd",$this->cpr_in,$this->nom_vc,$this->ian_fl,$this->pmo_fl);
			$statement->execute();
			echo $statement->error;
			$statement->close();
			$this->con->cerrarConexion();
		}
		
		public function listarPrestamista(){
			$statement = $this->con->consultaPreparada("CALL SPCCS15LIPRE();");
			$statement->execute();
			if(!($resultado= $statement->get_result())){
				echo("<b>No obtuvieron los datos</b><br>".$statement->error);
			}
			$statement->close();
			$this->con->cerrarConexion();
			return $resultado;
		}
		public function actualizarPrestamista(){
			$statement = $this->con->consultaPreparada("CALL SPCCS15UPPRE(?,?,?,?);");
			$statement->bind_param("isdd",$this->cpr_in,$this->nom_vc,$this->ian_fl,$this->pmo_fl);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
		}
		public function eliminarPrestamista($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS15DEPRE(?);");
			$statement->bind_param("i",$id);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
			
		}
		public function buscarPrestamista($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS15SEPRE(?);");
			$statement->bind_param("i",$id);
			$statement->execute();
			if(!($resultado = $statement->get_result())){
				echo("<b>No obtuvieron los datos</b><br>".$statement->error);
			}
			$statement->close();
			$this->con->cerrarConexion();
			$row = mysqli_fetch_array($resultado);
			return $row;
			
		}
		
}

 ?>