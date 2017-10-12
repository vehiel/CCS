<?php 
	require_once "models/inversion.php";
	
	class InversionController{
		private $inv;
	

		public function __construct(){
			$this->inv= new Inversion();
		}
		public function fetchFields($resulset){
			// $sql = "SELECT * FROM ccs08inv";
			// //$sql = "CALL SPCCS02LIPERUSU();";
			// $datos = $this->con->consultaRetorno($sql);
			$info = $resulset->fetch_fields();
			return $info;
		}
		public function index(){
			$rs = $this->inv->listarInversion(); 
			$info = $this->fetchFields($rs);
			$rs->free;
			require_once "views/header.php";
			require_once "views/inversion/index.php";
			require_once "views/footer.php";
		}
		public function agregar(){
			if(!$_POST){
				
				require_once "views/header.php";
				require_once "views/inversion/agregar.php";
				require_once "views/footer.php";
			}else{
				$this->inv->set("idi_in",$_POST['idi_in']);
				$this->inv->set("inv_vc",$_POST['inv_vc']);
				$this->inv->set("des_vc",$_POST['des_vc']);
				$this->inv->set("mma_fl",$_POST['mma_fl']);
				$this->inv->set("mmi_fl",$_POST['mmi_fl']);
				$this->inv->insertarInversion();
												
				header('location:?c=inversion&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
			$datos = $this->inv->buscarInversion($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/inversion/editar.php';
			require_once "views/footer.php";
		}else{
			$this->inv->set("idi_in",$_POST['idi_in']);
			$this->inv->set("inv_vc",$_POST['inv_vc']);
			$this->inv->set("des_vc",$_POST['des_vc']);
			$this->inv->set("mma_fl",$_POST['mma_fl']);
			$this->inv->set("mmi_fl",$_POST['mmi_fl']);
			$this->inv->actualizarInversion();

			header('location:?c=inversion');
			
			}
		}
		public function eliminar(){
			$this->inv->eliminarInsersion($_REQUEST['id']);
			header('location:?c=inversion');
		}
		public function ver(){
			$datos = $this->inv->buscarInversion($_REQUEST['id']);
			//$info = $this->fetchFields($datos);
			require_once "views/header.php";
			require_once 'views/inversion/ver.php';
			require_once "views/footer.php";
		}
	}
 ?>