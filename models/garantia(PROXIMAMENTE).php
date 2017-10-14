<?php 
require_once "conexion.php";
require_once "persona.php";
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
			$statement = $this->con->consultaPreparada("CALL SPCCS08ININV(?,?,?,?,?);");
			$statement->bind_param("issdd",$this->idi_in,$this->inv_vc,$this->des_vc,$this->mma_fl,$this->mmi_fl);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
		}

		public function listarGarantia(){
			$sql = "SELECT t1.IDP_01IN as ID,t1.NOM_01VC as Nombre,t1.AP1_01VC as Apellido1,t1.AP2_01VC as Apellido2,t1.TEL_01VC as Telefono,t1.EMA_01VC as Correo, t1.DIR_01VC as Direccion FROM CCS01PER t1 INNER JOIN ccs06afi t2 on t1.IDP_01IN = t2.IDP_01IN";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
			$this->con->cerrarConexion();

		}
		public function actualizarGarantia(){
			$statement = $this->con->consultaPreparada("CALL SPCCS08UPINV(?,?,?,?,?);");
			$statement->bind_param("issdd",$this->idi_in,$this->inv_vc,$this->des_vc,$this->mma_fl,$this->mmi_fl);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
		}
		}
		
		public function eliminarGarantia($id){
			$statement = $this->con->consultaPreparada("CALL SPCCS08DEINV(?);");
			$statement->bind_param("i",$id);
			$statement->execute();
			$statement->close();
			$this->con->cerrarConexion();
		}
		public function buscarGarantia($id){
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