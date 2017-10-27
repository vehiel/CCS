<?php 
	require_once "models/fiador.php";
	
	class FiadorController{
		private $fiador;
	

		public function __construct(){
			$this->fiador= new Fiador();
		}

		public function index(){
			$datos = $this->fiador->listarFiador();
			// $row = mysqli_fetch_array($datos);
			// var_dump($row);
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
				$this->fiador->set("idp_in",$_POST['idp_in']);
				$this->fiador->set("nom_vc",$_POST['nom_vc']);
				$this->fiador->set("ap1_vc",$_POST['ap1_vc']);
				$this->fiador->set("ap2_vc",$_POST['ap2_vc']);
				$this->fiador->set("tel_vc",$_POST['tel_vc']);
				$this->fiador->set("gen_in",$_POST['gen_in']);
				$this->fiador->set("ema_vc",$_POST['ema_vc']);
				$this->fiador->set("fna_dt",$_POST['fna_dt']);
				$this->fiador->set("dir_vc",$_POST['dir_vc']);
				$this->fiador->set("idf_in",$_POST['idf_in']);
				$this->fiador->set("emp_vc",$_POST['emp_vc']);
				$this->fiador->insertarFiador();
												
				header('location:?c=fiador&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
			$datos = $this->fiador->buscarFiador("editar",$_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/fiador/editar.php';
			require_once "views/footer.php";
		}
		else{
			$this->fiador->set("idp_in",$_POST['idp_in']);
			$this->fiador->set("nom_vc",$_POST['nom_vc']);
			$this->fiador->set("ap1_vc",$_POST['ap1_vc']);
			$this->fiador->set("ap2_vc",$_POST['ap2_vc']);
			$this->fiador->set("tel_vc",$_POST['tel_vc']);
			$this->fiador->set("gen_in",$_POST['gen_in']);
			$this->fiador->set("ema_vc",$_POST['ema_vc']);
			$this->fiador->set("fna_dt",$_POST['fna_dt']);
			$this->fiador->set("dir_vc",$_POST['dir_vc']);
			//$this->fiador->actualizarPersona();
			$this->fiador->set("idf_in",$_POST['idf_in']);
			$this->fiador->set("emp_vc",$_POST['emp_vc']);
			$this->fiador->actualizarFiador();

			header('location:?c=fiador');
			
			}
		}
		public function eliminar(){
			$this->fiador->eliminarFiador($_REQUEST['id']);
			//$this->fiador->eliminarPersona($_REQUEST['id']);
			header('location:?c=fiador');
		}
		public function ver(){
			$datos = $this->fiador->buscarFiador("ver",$_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/fiador/ver.php';
			require_once "views/footer.php";
		}
	}
 ?>