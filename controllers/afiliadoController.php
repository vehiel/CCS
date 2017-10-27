<?php 
	require_once "models/afiliado.php";
	
	class AfiliadoController{
		private $afiliado;
	

		public function __construct(){
			$this->afiliado= new Afiliado();
		}

		public function index(){

			$rs = $this->afiliado->listarAfiliado(); 
			require_once "views/header.php";
			require_once "views/afiliado/index.php";
			require_once "views/footer.php";
		}

		public function agregar(){
			if(!$_POST){
				
				require_once "views/header.php";
				require_once "views/afiliado/agregar.php";
				require_once "views/footer.php";
			}else{
				$this->afiliado->set("idp_in",$_POST['idp_in']);
				$this->afiliado->set("nom_vc",$_POST['nom_vc']);
				$this->afiliado->set("ap1_vc",$_POST['ap1_vc']);
				$this->afiliado->set("ap2_vc",$_POST['ap2_vc']);
				$this->afiliado->set("tel_vc",$_POST['tel_vc']);
				$this->afiliado->set("gen_in",$_POST['gen_in']);
				$this->afiliado->set("ema_vc",$_POST['ema_vc']);
				$this->afiliado->set("fna_dt",$_POST['fna_dt']);
				$this->afiliado->set("dir_vc",$_POST['dir_vc']);
				//$this->afiliado->insertarPersona();
				$this->afiliado->set("naf_in",$_POST['naf_in']);
				$this->afiliado->set("ncu_vc",$_POST['ncu_vc']);
				$this->afiliado->set("emo_in",$_POST['emo_in']);
				$this->afiliado->set("obs_vc",$_POST['obs_vc']);
				$this->afiliado->insertarAfiliado();
												
				header('location:?c=afiliado&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
			$datos = $this->afiliado->buscarAfiliado("editar",$_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/afiliado/editar.php';
			require_once "views/footer.php";
		}
		else{
			$this->afiliado->set("idp_in",$_POST['idp_in']);
			$this->afiliado->set("nom_vc",$_POST['nom_vc']);
			$this->afiliado->set("ap1_vc",$_POST['ap1_vc']);
			$this->afiliado->set("ap2_vc",$_POST['ap2_vc']);
			$this->afiliado->set("tel_vc",$_POST['tel_vc']);
			$this->afiliado->set("gen_in",$_POST['gen_in']);
			$this->afiliado->set("ema_vc",$_POST['ema_vc']);
			$this->afiliado->set("fna_dt",$_POST['fna_dt']);
			$this->afiliado->set("dir_vc",$_POST['dir_vc']);
			//$this->afiliado->actualizarPersona();
			$this->afiliado->set("naf_in",$_POST['naf_in']);
			$this->afiliado->set("ncu_vc",$_POST['ncu_vc']);
			$this->afiliado->set("eac_in",$_POST['eac_in']);
			$this->afiliado->set("emo_in",$_POST['emo_in']);
			$this->afiliado->set("obs_vc",$_POST['obs_vc']);
			$this->afiliado->ActualizarAfiliado();

			header('location:?c=afiliado');
			
			}
		}
		public function eliminar(){
			$this->afiliado->eliminarAfiliado($_REQUEST['id']);
			
			header('location:?c=afiliado');
		}
		public function ver(){
			$datos = $this->afiliado->buscarAfiliado("ver",$_REQUEST['id']);
			//var_dump($datos);
			//echo "algo en controlador afiliado";
			require_once "views/header.php";
			require_once 'views/afiliado/ver.php';
			require_once "views/footer.php";
		}
		public function inactivarAfi(){
			$this->afiliado->actualizarEAC($_REQUEST['id']);
			header('location:?c=afiliado');
		}
	}
 ?>