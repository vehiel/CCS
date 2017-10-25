<?php 
	require_once "models/prestamista.php";
	
	class PrestamistaController{
		private $pre;
	

		public function __construct(){
			$this->pre= new Prestamista();
		}
		public function fetchFields($resulset){
			// $sql = "SELECT * FROM ccs08inv";
			// //$sql = "CALL SPCCS02LIPERUSU();";
			// $datos = $this->con->consultaRetorno($sql);
			$info = $resulset->fetch_fields();
			return $info;
		}
		public function index(){
			$rs = $this->pre->listarPrestamista(); 
			$info = $this->fetchFields($rs);
			// var_dump($info);
			require_once "views/header.php";
			require_once "views/prestamista/index.php";
			require_once "views/footer.php";
		}
		public function agregar(){
			if(!$_POST){
				
				require_once "views/header.php";
				require_once "views/prestamista/agregar.php";
				require_once "views/footer.php";
			}else{
				$this->pre->set("cpr_in",$_POST['cpr_in']);
				$this->pre->set("nom_vc",$_POST['nom_vc']);
				$this->pre->set("ian_fl",$_POST['ian_fl']);
				$this->pre->set("pmo_fl",$_POST['pmo_fl']);
				$this->pre->insertarPrestamista();
												
				header('location:?c=prestamista&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
			$datos = $this->pre->buscarPrestamista($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/prestamista/editar.php';
			require_once "views/footer.php";
		}else{
			$this->pre->set("cpr_in",$_POST['cpr_in']);
			$this->pre->set("nom_vc",$_POST['nom_vc']);
			$this->pre->set("ian_fl",$_POST['ian_fl']);
			$this->pre->set("pmo_fl",$_POST['pmo_fl']);
			$this->pre->actualizarPrestamista();

			header('location:?c=prestamista');
			
			}
		}
		public function eliminar(){
			$this->pre->eliminarPrestamista($_REQUEST['id']);
			header('location:?c=prestamista');
		}
		public function ver(){
			$datos = $this->pre->buscarPrestamista($_REQUEST['id']);
			//$info = $this->fetchFields($datos);
			require_once "views/header.php";
			require_once 'views/prestamista/ver.php';
			require_once "views/footer.php";
		}
	}
 ?>