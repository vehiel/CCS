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
				$this->afiliado->set("idp_01in",$_POST['idp_01in']);
				$this->afiliado->set("nom_01vc",$_POST['nom_01vc']);
				$this->afiliado->set("ap1_01vc",$_POST['ap1_01vc']);
				$this->afiliado->set("ap2_01vc",$_POST['ap2_01vc']);
				$this->afiliado->set("tel_01vc",$_POST['tel_01vc']);
				$this->afiliado->set("gen_01in",$_POST['gen_01in']);
				$this->afiliado->set("ema_01vc",$_POST['ema_01vc']);
				$this->afiliado->set("fna_01dt",$_POST['fna_01dt']);
				$this->afiliado->set("dir_01vc",$_POST['dir_01vc']);
				$this->afiliado->insertarPersona();
				
				$this->afiliado->set("naf_06in",$_POST['naf_06in']);
				$this->afiliado->set("ncu_06vc",$_POST['ncu_06vc']);
				$this->afiliado->set("eac_06in",$_POST['eac_06in']);
				$this->afiliado->set("emo_06in",$_POST['emo_06in']);
				$this->afiliado->set("obs_06vc",$_POST['obs_06vc']);
				$this->afiliado->insertarAfiliado();
												
				header('location:?c=afiliado&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
			$datos = $this->afiliado->buscarAfiliado($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/afiliado/editar.php';
			require_once "views/footer.php";
		}
		else{
			$this->afiliado->set("idp_01in",$_POST['idp_01in']);
			$this->afiliado->set("nom_01vc",$_POST['nom_01vc']);
			$this->afiliado->set("ap1_01vc",$_POST['ap1_01vc']);
			$this->afiliado->set("ap2_01vc",$_POST['ap2_01vc']);
			$this->afiliado->set("tel_01vc",$_POST['tel_01vc']);
			$this->afiliado->set("gen_01in",$_POST['gen_01in']);
			$this->afiliado->set("ema_01vc",$_POST['ema_01vc']);
			$this->afiliado->set("fna_01dt",$_POST['fna_01dt']);
			$this->afiliado->set("dir_01vc",$_POST['dir_01vc']);
			$this->afiliado->actualizarPersona();
			$this->afiliado->set("naf_06in",$_POST['naf_06in']);
			$this->afiliado->set("ncu_06vc",$_POST['ncu_06vc']);
			$this->afiliado->set("eac_06in",$_POST['eac_06in']);
			$this->afiliado->set("emo_06in",$_POST['emo_06in']);
			$this->afiliado->set("obs_06vc",$_POST['obs_06vc']);
			$this->afiliado->ActualizarAfiliado();

			header('location:?c=afiliado');
			
			}
		}
		public function eliminar(){
			$this->afiliado->eliminarAfiliado($_REQUEST['id']);
			$this->afiliado->eliminarPersona($_REQUEST['id']);
			header('location:?c=afiliado');
		}
		public function ver(){
			$datos = $this->afiliado->buscarAfiliado($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/afiliado/ver.php';
			require_once "views/footer.php";
		}
	}
 ?>