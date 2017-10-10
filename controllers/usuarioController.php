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
				//inserta usuario

				$this->usuario->set("idp_01in",$_POST['idp_01in']);
				$this->usuario->set("nom_01vc",$_POST['nom_01vc']);
				$this->usuario->set("ap1_01vc",$_POST['ap1_01vc']);
				$this->usuario->set("ap2_01vc",$_POST['ap2_01vc']);
				$this->usuario->set("tel_01vc",$_POST['tel_01vc']);
				$this->usuario->set("gen_01in",$_POST['gen_01in']);
				$this->usuario->set("ema_01vc",$_POST['ema_01vc']);
				$this->usuario->set("fna_01dt",$_POST['fna_01dt']);
				$this->usuario->set("dir_01vc",$_POST['dir_01vc']);
				$this->usuario->insertarPersona();
				$this->usuario->set("nus_02in",$_POST['nus_02in']);
				$this->usuario->set("est_02vc",'1');
				$this->usuario->set("con_02vc",$_POST['con_02vc']);
				$this->usuario->set("idr_03in",$_POST['idr_03in']);
				$this->usuario->insertarUsuario();
								
				header('location:?c=usuario&m=index');
			}
		}
		public function editar(){
			if (!$_POST) {
			$rol = $this->rol->listarRol();
			$datos = $this->usuario->buscarUsuario($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/usuario/editar.php';
			require_once "views/footer.php";
		}
		else{
			$this->usuario->set("idp_01in",$_POST['idp_01in']);
			$this->usuario->set("nom_01vc",$_POST['nom_01vc']);
			$this->usuario->set("ap1_01vc",$_POST['ap1_01vc']);
			$this->usuario->set("ap2_01vc",$_POST['ap2_01vc']);
			$this->usuario->set("tel_01vc",$_POST['tel_01vc']);
			$this->usuario->set("gen_01in",$_POST['gen_01in']);
			$this->usuario->set("ema_01vc",$_POST['ema_01vc']);
			$this->usuario->set("fna_01dt",$_POST['fna_01dt']);
			$this->usuario->set("dir_01vc",$_POST['dir_01vc']);
			$this->usuario->actualizarPersona();
			$this->usuario->set("nus_02in",$_POST['nus_02in']);
			$this->usuario->set("est_02vc",$_POST['est_02vc']);
			$this->usuario->set("con_02vc",$_POST['con_02vc']);
			$this->usuario->set("idr_03in",$_POST['idr_03in']);
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
			$datos = $this->usuario->buscarUsuario($_REQUEST['id']);
			require_once "views/header.php";
			require_once 'views/usuario/ver.php';
			require_once "views/footer.php";
		}
	}
 ?>