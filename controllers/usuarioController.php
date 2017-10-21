<?php 
	require_once "models/usuario.php";
	require_once "models/rol.php";
	class UsuarioController{
		private $usuario;
		private $rol;

		public function __construct(){
			$this->usuario= new Usuario();
			$this->rol = new Rol();
		}

		public function index(){
			$pri = $this->rol->buscarPrivilegios();
			$rs = $this->usuario->listarUsuario();
			require_once "views/header.php";
			require_once "views/usuario/index.php";
			require_once "views/footer.php";
		}
		public function agregar(){
			if(!$_POST){
				$rs = $this->rol->listarRol();
				require_once "views/header.php";
				require_once "views/usuario/agregar.php";
				require_once "views/footer.php";
			}else{
				
				$this->usuario->set("idp_in",$_POST['idp_in']);
				$this->usuario->set("nom_vc",$_POST['nom_vc']);
				$this->usuario->set("ap1_vc",$_POST['ap1_vc']);
				$this->usuario->set("ap2_vc",$_POST['ap2_vc']);
				$this->usuario->set("tel_vc",$_POST['tel_vc']);
				$this->usuario->set("gen_in",$_POST['gen_in']);
				$this->usuario->set("ema_vc",$_POST['ema_vc']);
				$this->usuario->set("fna_dt",$_POST['fna_dt']);
				$this->usuario->set("dir_vc",$_POST['dir_vc']);
				//$this->usuario->insertarPersona();
				$this->usuario->set("nus_in",$_POST['nus_in']);
				$this->usuario->set("est_in",'1');
				$this->usuario->set("con_vc",$_POST['con_vc']);
				$this->usuario->set("idr_in",$_POST['idr_in']);
				$this->usuario->insertarUsuario();
								
				header('location:?c=usuario&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
			$rol = $this->rol->listarRol();
			$datos = $this->usuario->buscarUsuario("editar",$_REQUEST['id']);
			//var_dump($datos);
			//echo "<br><br>";
			// $time = strtotime($datos['fechaNac']);
			// $myFormarForView = date("d/m/y g:i A",$time);
			// echo "formated: ".$myFormarForView;
			// echo "<br>";
			// echo "ori: ".$datos['fechaNac'];
			require_once "views/header.php";
			require_once 'views/usuario/editar.php';
			require_once "views/footer.php";
		}
		else{
			$this->usuario->set("idp_in",$_POST['idp_in']);
			$this->usuario->set("nom_vc",$_POST['nom_vc']);
			$this->usuario->set("ap1_vc",$_POST['ap1_vc']);
			$this->usuario->set("ap2_vc",$_POST['ap2_vc']);
			$this->usuario->set("tel_vc",$_POST['tel_vc']);
			$this->usuario->set("gen_in",$_POST['gen_in']);
			$this->usuario->set("ema_vc",$_POST['ema_vc']);
			$this->usuario->set("fna_dt",$_POST['fna_dt']);
			$this->usuario->set("dir_vc",$_POST['dir_vc']);
			//$this->usuario->actualizarPersona();
			$this->usuario->set("nus_in",$_POST['nus_in']);
			$this->usuario->set("est_in",$_POST['est_in']);
			$this->usuario->set("idr_in",$_POST['idr_in']);
			$this->usuario->actualizarUsuario();

			header('location:?c=usuario');
			
			}
		}
		public function eliminar(){
			$this->usuario->eliminarUsuario($_REQUEST['id']);
			//$this->usuario->eliminarPersona($_REQUEST['id']);
			header('location:?c=usuario');
		}
		public function ver(){
			$datos = $this->usuario->buscarUsuario("ver",$_REQUEST['id']);

			$rol = $this->rol->buscarRol($datos['rol']);
			//print_r($rol);

			require_once "views/header.php";
			require_once 'views/usuario/ver.php';
			require_once "views/footer.php";
		}
		public function editarCon(){
			//echo "idp ".$_POST['idp_in']." <br>";
			if ($_POST['con']==$_POST['Rcon']) {
				// echo "== <br>";
			$this->usuario->actualizarCon($_POST['idp_in'],$_POST['Rcon']);
			}
			else{
				echo "las contrasenas no coinciden <br>";
			}
			header('location:?c=usuario');
		}
		
	}
 ?>