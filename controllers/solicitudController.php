<?php 
	require_once "models/solicitud.php";
	require_once "models/inversion.php";
	require_once "models/afiliado.php";
	
	class SolicitudController{
		private $solicitud;
		private $inversion;
		private $afiliado;

		public function __construct(){
			$this->solicitud= new Solicitud();
			$this->inversion= new Inversion();
			$this->afiliado= new Afiliado();
		}
		public function fetchFields($resulset){
			// $sql = "SELECT * FROM ccs08inv";
			// //$sql = "CALL SPCCS02LIPERUSU();";
			// $datos = $this->con->consultaRetorno($sql);
			$info = $resulset->fetch_fields();
			return $info;
		}

		public function index(){
			$rs = $this->solicitud->listarSolicitud();
			$info = $this->fetchFields($rs);
			$rs->free; 
			require_once "views/header.php";
			require_once "views/solicitud/index.php";
			require_once "views/footer.php";
		}
		public function agregar(){
			if(!$_POST){
				$inversion = $this->inversion->listarInversion();
				$afiliado = $this->afiliado->listarAfiliado();
				// $row = mysqli_fetch_array($afiliado);
				// var_dump($row);
				require_once "views/header.php";
				require_once "views/solicitud/agregar.php";
				require_once "views/footer.php";
			}else{
				$hoy= getdate();
				$fecha = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
				$null = 'null';
				$this->solicitud->set("nso_in",$_POST['nso_in']);
				$this->solicitud->set("naf_in",$_POST['naf_in']);
				$this->solicitud->set("idi_in",$_POST['idi_in']);
				$this->solicitud->set("cga_in",$_POST['cga_in']);
				$this->solicitud->set("fso_dt",$fecha);
				$this->solicitud->set("fre_dt",$null);
				$this->solicitud->set("fap_dt",$null);
				$this->solicitud->set("est_in",'0');
				$this->solicitud->set("mca_fl",$_POST['mca_fl']);
				$this->solicitud->insertarSolicitud();

				header('location:?c=solicitud&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
				$inversion = $this->inversion->listarInversion();
				$afiliado = $this->afiliado->listarAfiliado();
				$sol = $this->solicitud->buscarSolicitud($_REQUEST['id']);
				//$row = mysqli_fetch_array($afiliado);
					// var_dump($sol);
				require_once "views/header.php";
				require_once 'views/solicitud/editar.php';
				require_once "views/footer.php";
			}
			else{

				$hoy= getdate();
				$fecha = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
				$null = 'null';
				// echo "nso_in " . $_POST['nso_in']."<br>";
				// echo "naf_in " . $_POST['naf_in']."<br>";
				// echo "idi_in " . $_POST['idi_in']."<br>";
				// echo "cga_in " . $_POST['cga_in']."<br>";
				// echo "fso_dt " . $_POST['fso_dt']."<br>";
				// echo "fre_dt " . $fecha."<br>";
				// echo "fap_dt " . $_POST['fap_dt']."<br>";
				// echo "est_in " . '2'."<br>";
				// echo "mca_fl " . $_POST['mca_fl']."<br>";
				$this->solicitud->set("nso_in",$_POST['nso_in']);
				$this->solicitud->set("naf_in",$_POST['naf_in']);
				$this->solicitud->set("idi_in",$_POST['idi_in']);
				$this->solicitud->set("cga_in",$_POST['cga_in']);
				$this->solicitud->set("fso_dt",$_POST['fso_dt']);
				$this->solicitud->set("fre_dt",$fecha);
				$this->solicitud->set("fap_dt",$null);
				$this->solicitud->set("est_in",'2');
				$this->solicitud->set("mca_fl",$_POST['mca_fl']);
				$this->solicitud->actualizarSolicitud();

				header('location:?c=solicitud');
				}
		}
		public function eliminar(){
			$this->solicitud->eliminarSolicitud($_REQUEST['id']);
			header('location:?c=solicitud');
		}
		public function ver(){
			$sol = $this->solicitud->buscarSolicitud($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/solicitud/ver.php';
			require_once "views/footer.php";
		}
		public function aprovar(){
			$hoy= getdate();
				$fecha = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
			$this->solicitud->set("nso_in",$_REQUEST['id']);
			$this->solicitud->set("fap_dt",$fecha);
			$this->solicitud->aprovarSolicitud();
			//echo "nso_in: ". $_REQUEST['id'];
			header('location:?c=solicitud');
		}
	}
 ?>