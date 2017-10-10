<?php 
require_once "conexion.php";
require_once "persona.php";
class Fiador extends Persona
{
	
		private $con;
		protected $idf_07in;
		protected $emp_07vc;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->$atributo;
		}
		public function insertarFiador(){
			$sql = "INSERT INTO `ccs07fia` (`IDP_01IN`, `IDF_07IN`, `EMP_07VC`) 
					VALUES ('{$this->idp_01in}', '{$this->idf_07in}', '{$this->emp_07vc}')";
			$this->con->consultaSimple($sql);
			$this->con->cerrarConexion();
		}
		public function insertarPersona(){
			$sql = "INSERT INTO ccs01per ( 
					IDP_01IN,NOM_01VC,AP1_01VC,AP2_01VC,TEL_01VC,GEN_01IN,EMA_01VC,DIR_01VC,FNA_01DT)
					VALUES ('{$this->idp_01in}', '{$this->nom_01vc}', '{$this->ap1_01vc}', '{$this->ap2_01vc}', '{$this->tel_01vc}', '{$this->gen_01in}', '{$this->ema_01vc}', '{$this->dir_01vc}', '{$this->fna_01dt}'
					)";
			 $this->con->consultaSimple($sql);

		}

		public function listarFiador(){
			$sql = "SELECT t1.IDP_01IN as ID,t1.NOM_01VC as Nombre,t1.AP1_01VC as Apellido1,t1.AP2_01VC as Apellido2,t1.TEL_01VC as Telefono,t1.EMA_01VC as Correo, t1.DIR_01VC as Direccion FROM CCS01PER t1 INNER JOIN CCS07FIA t2 on t1.IDP_01IN = t2.IDP_01IN";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
			$this->con->cerrarConexion();

		}
		public function actualizarFiador(){
			$sql = "UPDATE CCS07FIA set IDF_07IN='{$this->idf_07in}',EMP_07VC='{$this->emp_07vc}'
				WHERE IDP_01IN='{$this->idp_01in}'";
			$this->con->consultaSimple($sql);
			$this->con->cerrarConexion();
		}
		public function actualizarPersona(){
			$sql = "UPDATE ccs01per set NOM_01VC='{$this->nom_01vc}',AP1_01VC='{$this->ap1_01vc}',AP2_01VC='{$this->ap2_01vc}',TEL_01VC='{$this->tel_01vc}',GEN_01IN='{$this->gen_01in}',EMA_01VC='{$this->ema_01vc}',DIR_01VC='{$this->dir_01vc}',FNA_01DT='{$this->fna_01dt}'WHERE IDP_01IN='{$this->idp_01in}'";
			$this->con->consultaSimple($sql);
		}
		public function eliminarFiador($id){
			$sql = "DELETE FROM CCS07FIA WHERE IDP_01IN='$id'";
			$this->con->consultaSimple($sql);
		}
		public function eliminarPersona($id){
			$sql = "DELETE FROM ccs01per WHERE IDP_01IN ='$id'";
			$this->con->consultaSimple($sql);
			$this->con->cerrarConexion();
		}
		public function buscarFiador($id){
			
			$sql = "SELECT t1.IDP_01IN as idp_01in,t1.NOM_01VC as nom_01vc ,t1.AP1_01VC as ap1_01vc,t1.AP2_01VC as ap2_01vc,t1.TEL_01VC as tel_01vc,t1.EMA_01VC as ema_01vc, t1.DIR_01VC as dir_01vc, t1.GEN_01IN as gen_01in, t1.FNA_01DT as fna_01dt,t2.IDF_07IN as idf_07vc , t2.EMP_07VC as emp_07vc FROM ccs01per t1 INNER JOIN ccs07fia t2 ON t1.IDP_01IN = t2.IDP_01IN  WHERE t1.IDP_01IN ='$id'";
			$datos = $this->con->consultaRetorno($sql);
			$this->con->cerrarConexion();
			$row = mysqli_fetch_assoc($datos);
			return $row;
			
		}
}
 ?>