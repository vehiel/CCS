<?php 
require_once "conexion.php";
require_once "persona.php";
class Fiador extends Persona
{
	
	private $con;
	protected $idf_in;
	protected $emp_vc;

	public function __construct(){
		$this->con = new Conexion();
	}

	public function set($atributo, $contenido){
		$this->$atributo = $contenido;
	}
	public function get($atributo){
		return $this->$atributo;
	}
	public function insertarFiador(){
			// echo "idp_in ".$this->idp_in. "<br>";
			// 	echo "nom_vc ".$this->nom_vc. "<br>";
			// 	echo "ap1_vc ".$this->ap1_vc. "<br>";
			// 	echo "ap2_vc ".$this->ap2_vc. "<br>";
			// 	echo "tel_vc ".$this->tel_vc. "<br>";
			// 	echo "gen_in ".$this->gen_in. "<br>";
			// 	echo "ema_vc ".$this->ema_vc. "<br>";
			// 	echo "fna_dt ".$this->fna_dt. "<br>";
			// 	echo "dir_vc ".$this->dir_vc. "<br>";
			// 	echo "idf_in ".$this->idf_in. "<br>";
			// 	echo "emp_vc ".$this->emp_vc. "<br>";
		$statement = $this->con->consultaPreparada("CALL SPCCS07INPERFIA(?,?,?,?,?,?,?,?,?,?,?);");
		$statement->bind_param("issssisssis",$this->idp_in,$this->nom_vc,$this->ap1_vc,$this->ap2_vc,$this->tel_vc,$this->gen_in,$this->ema_vc,$this->dir_vc,$this->fna_dt,$this->idf_in,$this->emp_vc);
		
		$statement->execute();
		echo $statement->error;
		$statement->close();
		$this->con->cerrarConexion();
	}
	
	// public function listarFiador(){
	// 	$sql = "CALL SPCCS07LIPERFIA();";
	// 	$datos = $this->con->consultaRetorno($sql);
	// 	return $datos;
	// 	$this->con->cerrarConexion();
	// }
	public function listarFiador(){
		$statement = $this->con->consultaPreparada("CALL SPCCS07LIPERFIA();");
		$statement->execute();
		if (!($resultado = $statement->get_result())) {
			echo "(" . $statement->errno . ") " . $statement->error;
		}
		return $resultado;
		$statement->close();
		$this->con->cerrarConexion();
	}
	public function actualizarFiador(){
		$statement = $this->con->consultaPreparada("CALL SPCCS07UPPERFIA(?,?,?,?,?,?,?,?,?,?,?);");
		$statement->bind_param("issssisssis",$this->idp_in,$this->nom_vc,$this->ap1_vc,$this->ap2_vc,$this->tel_vc,$this->gen_in,$this->ema_vc,$this->dir_vc,$this->fna_dt,$this->idf_in,$this->emp_vc);
		
		$statement->execute();
		echo $statement->error;
		$statement->close();
		$this->con->cerrarConexion();
	}
	
	public function eliminarFiador($id){
		$null = "NULL";
		$statement = $this->con->consultaPreparada("CALL SPCCS07DEPERFIA(?,?);");
		$statement->bind_param("is",$id,$null);
		$statement->execute();
		echo $statement->error;
		$statement->close();
		$this->con->cerrarConexion();
	}
	
	public function buscarFiador($m,$valor){
		$fiaSol=false;
		if ($m=="editar") {
			$statement = $this->con->consultaPreparada("CALL SPCCS07SECEPERFIA(?);");
			$statement->bind_param("i",$valor);
			
		}else if($m=="ver"){
			$null = 'NULL';
			$statement = $this->con->consultaPreparada("CALL SPCCS07SEPERFIA(?,?,?);");
			$statement->bind_param("iss",$valor,$null,$null);
			
		}else if($m=="fiaSol"){
			$fiaSol = true;
			//$Data = true;
			$statement = $this->con->consultaPreparada("CALL SPCCS07SEPERFIA(?,?,?);");
			$statement->bind_param("sss",$valor,$valor,$valor);

		}
		$statement->execute();
		if(!($resultado = $statement->get_result())){
			echo "<b>No  se obtuvieron los datos</b><br>  (" . $statement->errno . ") " . $statement->error;
		}
		$statement->close();
		$this->con->cerrarConexion();
		if ($fiaSol){
			$hint ="";
			while ($row = mysqli_fetch_array($resultado)) {
				$hint .= '<tr>
				<td>'.$row[0].'</td>
				<td>'.$row[1].'</td>
				<td>'.$row[7].'</td>
				</tr>';
			}
			
			
			if ($hint=="") {
				$response='<tr>
				<td>'."sin coincidencias".'</td>
				<td>'."sin coincidencias".'</td>
				<td>'."sin coincidencias".'</td>
				</tr>';
								  // $response="no suggestion";
			} else {
				$response=$hint;
			}

			echo $response;
		}else{
		$row = mysqli_fetch_array($resultado);
		return $row;
		}
	}
}
?>