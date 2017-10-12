<?php 
require_once "conexion.php";
class Inversion{
		private $con;
		
		protected $idi_in;
		protected $inv_vc;
		protected $des_vc;
		protected $mma_fl;
		protected $mmi_fl;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function insertarInversion(){
			$statement = $this->con->consultaPreparada("CALL SPCCS08ININV(?,?,?,?,?);");
			$statement->bind_param("issdd",$this->idi_in,$this->inv_vc,$this->des_vc,$this->mma_fl,$this->mmi_fl);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
		}
		
		public function listarInversion(){
			$sql = "SELECT * FROM ccs08inv";
			//$sql = "CALL SPCCS02LIPERUSU();";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
			$this->con->cerrarConexion();
		}
		public function actualizarInversion(){
			$statement = $this->con->consultaPreparada("CALL SPCCS08UPINV(?,?,?,?,?);");
			$statement->bind_param("issdd",$this->idi_in,$this->inv_vc,$this->des_vc,$this->mma_fl,$this->mmi_fl);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
		}
		public function eliminarInsersion($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS08DEINV(?);");
			$statement->bind_param("i",$id);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
			
		}
		public function buscarInversion($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS08SEINV(?);");
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
			public function nombreCol($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS08SEINV(?);");
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