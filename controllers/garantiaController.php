<?php 
	require_once "models/garantia.php";
	
	class GarantiaController{
		private $gar;
	

		public function __construct(){
			$this->gar= new Garantia();
		}

		public function index(){
			$rs = $this->gar->listarGarantia(); 
			require_once "views/header.php";
			require_once "views/garantia/index.php";
			require_once "views/footer.php";
		}
		public function agregar(){
			if(!$_POST){
				
				require_once "views/header.php";
				require_once "views/garantia/agregar.php";
				require_once "views/footer.php";
			}else{
				$this->gar->set("cga_in",$_POST['cga_in']);
			    $this->gar->set("gar_vc",$_POST['gar_vc']);
			    $this->gar->set("des_vc",$_POST['des_vc']);
				$this->gar->insertarGarantia();
												
				header('location:?c=garantia&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
			$datos = $this->gar->buscarGarantia($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/garantia/editar.php';
			require_once "views/footer.php";
		}
		else{
			$this->gar->set("cga_in",$_POST['cga_in']);
			$this->gar->set("gar_vc",$_POST['gar_vc']);
			$this->gar->set("des_vc",$_POST['des_vc']);
			$this->gar->actualizarGarantia();

			header('location:?c=garantia');
			
			}
		}
		public function eliminar(){
			$this->gar->eliminarGarantia($_REQUEST['id']);
			header('location:?c=garantia');
		}
		public function ver(){
			$datos = $this->gar->buscarGarantia($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/garantia/ver.php';
			require_once "views/footer.php";
		}
	}
 ?>