<?php
$q=$_POST["search"];
require_once("../../conexion.php");

if (strlen($q)>0) {
  $hint="";
  $statement = $conexion->prepare("CALL SPCCS06SEPERAFI(?,?,?);");
  $statement->bind_param("sss",$q,$q,$q);
  $statement->execute();
  if (!($resultado = $statement->get_result())) {
    echo "(" . $statement->errno . ") " . $statement->error;
  }
  $statement->close();
  $conexion->close();
  while ($row = mysqli_fetch_array($resultado)) {

    $hint .= '<tr>
    <td>'.$row[0].'</td>
    <td>'.$row[1].'</td>
    <td>'.$row[7].'</td>
    </tr>';
  }  
}


if ($hint=="") {
  $response='<tr>
    <td>'."no suggestion".'</td>
    <td>'."no suggestion".'</td>
    <td>'."no suggestion".'</td>
    </tr>';
} else {
  $response=$hint;
}

echo $response;
?>