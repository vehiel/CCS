<?php 
	require_once "models/fiador.php";
	
	class FiadorController{
		private $fiador;
	

		public function __construct(){
			$this->fiador= new Fiador();
		}

		public function index(){
			$rs = $this->fiador->listarFiador(); 
			require_once "views/header.php";
			require_once "views/fiador/index.php";
			require_once "views/footer.php";
		}
		public function agregar(){
			if(!$_POST){
				
				require_once "views/header.php";
				require_once "views/fiador/agregar.php";
				require_once "views/footer.php";
			}else{
				$this->fiador->set("idp_01in",$_POST['idp_01in']);
				$this->fiador->set("nom_01vc",$_POST['nom_01vc']);
				$this->fiador->set("ap1_01vc",$_POST['ap1_01vc']);
				$this->fiador->set("ap2_01vc",$_POST['ap2_01vc']);
				$this->fiador->set("tel_01vc",$_POST['tel_01vc']);
				$this->fiador->set("gen_01in",$_POST['gen_01in']);
				$this->fiador->set("ema_01vc",$_POST['ema_01vc']);
				$this->fiador->set("fna_01dt",$_POST['fna_01dt']);
				$this->fiador->set("dir_01vc",$_POST['dir_01vc']);
				$this->fiador->insertarPersona();
				$this->fiador->set("idf_07in",$_POST['idf_07in']);
				$this->fiador->set("emp_07vc",$_POST['emp_07vc']);
				$this->fiador->insertarFiador();
												
				header('location:?c=fiador&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
			$datos = $this->fiador->buscarFiador($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/fiador/editar.php';
			require_once "views/footer.php";
		}
		else{
			$this->fiador->set("idp_01in",$_POST['idp_01in']);
			$this->fiador->set("nom_01vc",$_POST['nom_01vc']);
			$this->fiador->set("ap1_01vc",$_POST['ap1_01vc']);
			$this->fiador->set("ap2_01vc",$_POST['ap2_01vc']);
			$this->fiador->set("tel_01vc",$_POST['tel_01vc']);
			$this->fiador->set("gen_01in",$_POST['gen_01in']);
			$this->fiador->set("ema_01vc",$_POST['ema_01vc']);
			$this->fiador->set("fna_01dt",$_POST['fna_01dt']);
			$this->fiador->set("dir_01vc",$_POST['dir_01vc']);
			$this->fiador->actualizarPersona();
			$this->fiador->set("idf_07in",$_POST['idf_07in']);
			$this->fiador->set("emp_07vc",$_POST['emp_07vc']);
			$this->fiador->actualizarFiador();

			header('location:?c=fiador');
			
			}
		}
		public function eliminar(){
			$this->fiador->eliminarFiador($_REQUEST['id']);
			$this->fiador->eliminarPersona($_REQUEST['id']);
			header('location:?c=fiador');
		}
		public function ver(){
			$datos = $this->fiador->buscarFiador($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/fiador/ver.php';
			require_once "views/footer.php";
		}
	}
 ?>