<?php 
require_once "conexion.php";
require_once "persona.php";
class Usuario extends Persona
{
	
		private $con;
		//usuario
		//protected $idp_01in;
		protected $nus_02in;
		protected $est_02vc;// dice que es vc pero es int
		protected $con_02vc;
		protected $idr_03in;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->$atributo;
		}
		public function insertarUsuario(){
			$sql = "
					INSERT INTO `ccs02usu` (IDP_01IN, NUS_02IN, CON_02VC, EST_02VC, IDR_03IN)
					VALUES('{$this->idp_01in}', '{$this->nus_02in}', '{$this->con_02vc}', '{$this->est_02vc}','{$this->idr_03in}');";
					/*INSERT INTO `ccs01per` (IDP_01IN,NOM_01VC,AP1_01VC,AP2_01VC,TEL_01VC,		GEN_01IN,EMA_01VC,DIR_01VC,FNA_01DT)
					VALUES ('504080764', 'VEHIEL', 'ALEMAN', 'CAMPOS', '87221859', '1', 'VE@GMAIL.COM','AQUI', '1996-01-15');*/
			// $statement = $this->con->\prepare("CALL SPCCS02INPERUSU(?,?,?,?,?,?,?,?,?,?,?,?,?)");
			// $statement->bind_param("sssssssssssss",504080764,'Penechan','AP1','AP2','87221859',1,'pene@gmail.com','por ahi','1996-01-15',987,'usuario345','penepass',3);
			// $statement->execute();
			// $statement->close();
			// echo "datos guardados, vaya a revisar... esclavo";


			// $sql = "INSERT INTO `ccs02usu` (`IDP_01IN`, `NUS_02IN`, `NIC_02VC`, `CON_02VC`, `IDR_03IN`) 
			// 		VALUES ('$this->idp_01in', '$this->nus_02in', '$this->nic_02vc', '$this->con_02vc', '$this->idr_03in')";
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

		public function listarUsuario(){
			$sql = "SELECT t1.IDP_01IN as ID,t1.NOM_01VC as Nombre,t1.AP1_01VC as Apellido1,t1.AP2_01VC as Apellido2,t1.TEL_01VC as Telefono,t1.EMA_01VC as Correo, t1.DIR_01VC as Direccion FROM CCS01PER t1 INNER JOIN ccs02usu t2 on t1.IDP_01IN = t2.IDP_01IN WHERE t2.EST_02VC=1";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
			$this->con->cerrarConexion();

		}
		public function actualizarUsuario(){
			$sql = "UPDATE ccs02USU set NUS_02IN='{$this->nus_02in}',EST_02VC='{$this->est_02vc}',CON_02VC='{$this->con_02vc}',IDR_03IN='{$this->idr_03in}'
	WHERE IDP_01IN='{$this->idp_01in}'";
			$this->con->consultaSimple($sql);
			$this->con->cerrarConexion();
		}
		public function actualizarPersona(){
			$sql = "UPDATE ccs01per set NOM_01VC='{$this->nom_01vc}',AP1_01VC='{$this->ap1_01vc}',AP2_01VC='{$this->ap2_01vc}',TEL_01VC='{$this->tel_01vc}',GEN_01IN='{$this->gen_01in}',EMA_01VC='{$this->ema_01vc}',DIR_01VC='{$this->dir_01vc}',FNA_01DT='{$this->fna_01dt}'WHERE IDP_01IN='{$this->idp_01in}'";
			$this->con->consultaSimple($sql);
		}
		public function eliminarUsuario($id){
			$sql = "UPDATE ccs02usu set EST_02VC='0' WHERE IDP_01IN='$id'";
			$this->con->consultaSimple($sql);
		}
		public function eliminarPersona($id){
			// $sql = "DELETE FROM ccs01per WHERE IDP_01IN ='$id'";
			// $this->con->consultaSimple($sql);
			// $this->con->cerrarConexion();
			echo "el usuario no se elimina, solo se desactiva (en modelo usuario)";
		}
		public function buscarUsuario($id){
			
			$sql = "SELECT t1.IDP_01IN as idp_01in,t1.NOM_01VC as nom_01vc ,t1.AP1_01VC as ap1_01vc,t1.AP2_01VC as ap2_01vc,t1.TEL_01VC as tel_01vc,t1.EMA_01VC as ema_01vc, t1.DIR_01VC as dir_01vc, t1.GEN_01IN as gen_01in, t1.FNA_01DT as fna_01dt, t2.IDR_03IN as idr_03in , t2.NUS_02IN as nus_02in, t2.EST_02VC as est_02vc, t2.CON_02VC as con_02vc FROM ccs01per t1 INNER JOIN ccs02usu t2 ON t1.IDP_01IN = t2.IDP_01IN  WHERE t1.IDP_01IN ='$id'";
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