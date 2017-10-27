<?php 
	
	class Rol{
		private $con;

		private $idr_in;
		private $rol_vc;

		public function __construct(){
			$this->con = new Conexion();
		}
		public function insertarRol(){

		}
		public function listarRol(){
			$sql = "SELECT idr_03in, rol_03vc FROM CCS03ROL";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
		public function buscarRol($id){
			
			$statement = $this->con->consultaPreparada("CALL SPCCS03SEROL(?);");
			$statement->bind_param("i",$id);
			$statement->execute();
			if(!($resultado = $statement->get_result()))
			{echo("<b>No  se obtuvieron los datos</b><br>");}
			$statement->close();
			$this->con->cerrarConexion();
			$row = mysqli_fetch_array($resultado);
			return $row;
			//echo $row[0];
			//print_r($row). "rol";
		}
		public function buscarPrivilegios(){
			$rol = '1'; //este rol viene de un controlador principal que es el primero al que se accede despues de pasar el login, este controlador debe bucar los datos nescesarios del usuario para poder cargar la vista apropiada
			$statement = $this->con->consultaPreparada("CALL SPCCS04SELISPRI(?);");
			$statement->bind_param("i",$rol);
			$statement->execute();
			if(!($resultado = $statement->get_result()))
			{echo("<b>No  se obtuvieron los datos de rol</b><br>");}
			$statement->close();
			$this->con->cerrarConexion();
			// while ($row = mysqli_fetch_array($resultado)) {
			// 	echo ($row[0])."<br>";
			// };
			return $resultado;
			
			// echo "algo ". $row[1]. "<br>";
			
		}
	}
 ?>