<?php 
require_once "conexion.php";
require_once "persona.php";
class Afiliado extends Persona
{
	
		private $con;
		
		protected $naf_06in;
		protected $ncu_06vc;
		protected $eac_06in;
		protected $emo_06in;
		protected $obs_06vc;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->$atributo;
		}
		public function insertarAfiliado(){
			$sql = "INSERT INTO `ccs06afi` (`IDP_01IN`, `NAF_06IN`, `NCU_06VC`, `EAC_06IN`, `EMO_06IN`,`OBS_06VC`)VALUES('{$this->idp_01in}', '{$this->naf_06in}', '{$this->ncu_06vc}','{$this->eac_06in}','{$this->emo_06in}','{$this->obs_06vc}');";
			$this->con->consultaSimple($sql);
			$this->con->cerrarConexion();
		}

		public function insertarPersona(){
			$sql = "INSERT INTO ccs01per ( 
					IDP_01IN,NOM_01VC,AP1_01VC,AP2_01VC,TEL_01VC,GEN_01IN,EMA_01VC,DIR_01VC,FNA_01DT)
					VALUES ('{$this->idp_01in}', '{$this->nom_01vc}', '{$this->ap1_01vc}', '{$this->ap2_01vc}', '{$this->tel_01vc}', '{$this->gen_01in}', '{$this->ema_01vc}', '{$this->dir_01vc}', '{$this->fna_01dt}')";
			 $this->con->consultaSimple($sql);
		}

		public function listarAfiliado(){
			$sql = "SELECT t1.IDP_01IN as ID,t1.NOM_01VC as Nombre,t1.AP1_01VC as Apellido1,t1.AP2_01VC as Apellido2,t1.TEL_01VC as Telefono,t1.EMA_01VC as Correo, t1.DIR_01VC as Direccion FROM CCS01PER t1 INNER JOIN ccs06afi t2 on t1.IDP_01IN = t2.IDP_01IN";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
			$this->con->cerrarConexion();

		}
		public function actualizarAfiliado(){
			$sql = "UPDATE ccs06afi set NAF_06IN='{$this->naf_06in}',NCU_06VC='{$this->ncu_06vc}'
			,EAC_06IN='{$this->eac_06in}',EMO_06IN='{$this->emo_06in}',OBS_06VC='{$this->obs_06vc}'
			WHERE IDP_01IN='{$this->idp_01in}'";
			$this->con->consultaSimple($sql);
			$this->con->cerrarConexion();
		}
		public function actualizarPersona(){
			$sql = "UPDATE ccs01per set NOM_01VC='{$this->nom_01vc}',AP1_01VC='{$this->ap1_01vc}',AP2_01VC='{$this->ap2_01vc}',TEL_01VC='{$this->tel_01vc}',GEN_01IN='{$this->gen_01in}',EMA_01VC='{$this->ema_01vc}',DIR_01VC='{$this->dir_01vc}',FNA_01DT='{$this->fna_01dt}'WHERE IDP_01IN='{$this->idp_01in}'";
			$this->con->consultaSimple($sql);
		}
		public function eliminarAfiliado($id){
			$sql = "DELETE FROM ccs06afi WHERE IDP_01IN='$id'";
			$this->con->consultaSimple($sql);
		}
		public function eliminarPersona($id){
			$sql = "DELETE FROM ccs01per WHERE IDP_01IN ='$id'";
			$this->con->consultaSimple($sql);
			$this->con->cerrarConexion();
		}
		public function buscarAfiliado($id){
			
			$sql = "SELECT t1.IDP_01IN as idp_01in,t1.NOM_01VC as nom_01vc ,t1.AP1_01VC as ap1_01vc,t1.AP2_01VC as ap2_01vc,t1.TEL_01VC as tel_01vc,t1.EMA_01VC as ema_01vc, t1.DIR_01VC as dir_01vc, t1.GEN_01IN as gen_01in, t1.FNA_01DT as fna_01dt,t2.NAF_06IN as naf_06in , t2.NCU_06VC as ncu_06vc, t2.EAC_06IN as eac_06in, t2.EMO_06IN as emo_06in, t2.OBS_06VC as obs_06vc FROM ccs01per t1 INNER JOIN ccs06afi t2 ON t1.IDP_01IN = t2.IDP_01IN  where t2.IDP_01IN = '$id'";
			$datos = $this->con->consultaRetorno($sql);
			$this->con->cerrarConexion();
			$row = mysqli_fetch_assoc($datos);
			return $row;
			// $row = mysqli_fetch_assoc($datos);
			// return $row;
			// print('Nombre');
		}
}
 ?>