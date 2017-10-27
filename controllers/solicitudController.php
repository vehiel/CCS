<?php 
	require_once "models/solicitud.php";
	require_once "models/inversion.php";
	require_once "models/garantia.php";
	require_once "models/afiliado.php";
	require_once "models/fiador.php";
	
	class SolicitudController{
		private $solicitud;
		private $inversion;
		private $garantia;
		private $afiliado;
		private $fiador;

		public function __construct(){
			$this->solicitud= new Solicitud();
			$this->inversion= new Inversion();
			$this->garantia = new Garantia();
			$this->afiliado= new Afiliado();
			$this->fiador =  new Fiador();
		}
		public function fetchFields($resulset){
			//esta funcion es para obtener el nombre de la columna dentro del sp y mostrarlo en la tabla, actualmente no se usa
			$info = $resulset->fetch_fields();
			return $info;
		}

		public function index(){
			$rs = $this->solicitud->listarSolicitud();
			$info = $this->fetchFields($rs);
			//$rs->free; 
			require_once "views/header.php";
			require_once "views/solicitud/index.php";
			require_once "views/footer.php";
		}
		public function agregar(){
			
			if(!$_POST){
				$inversion = $this->inversion->listarInversion();
				$garantia = $this->garantia->listarGarantia();
				$afi = array();
				if(isset($_GET['id_afi'])){
					//echo "algo en el request";if (count($afi)==0)
					$afi = $this->afiliado->buscarAfiliado("editar",$_GET['id_afi']);
				}else{
					$afi["Cedula"] = "";
					$afi["Nombre"] = "";
					$afi["Numero_Afiliado"] = "";
				}
				// $row = mysqli_fetch_array($afiliado);
				// var_dump($row);
				require_once "views/header.php";
				require_once "views/solicitud/agregar.php";
				require_once "views/footer.php";
			}else{
				// $hoy= getdate();
				// $fecha = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
				// $null = 'null';
				$this->solicitud->set("nso_in",$_POST['nso_in']);
				$this->solicitud->set("naf_in",$_POST['naf_in']);
				$this->solicitud->set("idi_in",$_POST['idi_in']);
				$this->solicitud->set("cga_in",$_POST['cga_in']);
				//$this->solicitud->set("fso_dt",$fecha);
				$this->solicitud->set("est_in",'0');
				$this->solicitud->set("mca_fl",$_POST['mca_fl']);
				$this->solicitud->insertarSolicitud();
				if($_POST['idf_in']){
					echo "fiador en SolicitudController";
				}

				header('location:?c=solicitud&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
				$inversion = $this->inversion->listarInversion();
				$afiliado = $this->afiliado->listarAfiliado();
				$sol = $this->solicitud->buscarSolicitud("editar",$_REQUEST['idS']);
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
				// echo "fap_dt " . "NA"."<br>";
				// echo "est_in " . '2'."<br>";
				// echo "mca_fl " . $_POST['mca_fl']."<br>";
				$this->solicitud->set("nso_in",$_POST['nso_in']);
				$this->solicitud->set("naf_in",$_POST['naf_in']);
				$this->solicitud->set("idi_in",$_POST['idi_in']);
				$this->solicitud->set("cga_in",$_POST['cga_in']);
				$this->solicitud->set("fso_dt",$_POST['fso_dt']);
				$this->solicitud->set("fre_dt",$_POST['fre_dt']);
				$this->solicitud->set("fap_dt",$_POST['fap_dt']);
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
			$sol = $this->solicitud->buscarSolicitud("ver",$_REQUEST['id']);
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
		public function rechazar(){
			echo "PROXIMENTE <br> ";

		}
		public function cancelar(){
			echo "PROXIMENTE <br> ";

		}
		public function obtenerAfiliado(){
			$this->afiliado->buscarAfiliado("afiSol",$_GET["buscar"]);
			//$nombre = $nombre;
			//consol.log($_POST["vehiel"]);
			// $this->afiliado->vehiel($_GET["buscar"]);
		}
		public function obtenerFiador(){
			$this->fiador->buscarFiador("fiaSol",$_GET["buscar"]);
		}
	}
 ?>