<?php

$controller = 'usuario';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))
{
    require_once "controllers/".$controller."Controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    
    $controller = strtolower($_REQUEST['c']);
    $metodo = isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';
    
    require_once "controllers/".$controller."Controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
  
    call_user_func( array( $controller, $metodo ) );
}

// require_once "models/catInversion.php";

// $usuario = new catInversion();
//  $usuario->nombreColx2();
// $usuario->set("idp_01in",'504080764');
// $usuario->set("nom_01vc",'VEHIEL');
// $usuario->set("ap1_01vc",'ALEMAN');
// $usuario->set("ap2_01vc",'campos');
// $usuario->set("tel_01vc",'87221859');
// $usuario->set("gen_01in",'1');
// $usuario->set("ema_01vc",'VE@GMAIL.COM');
// $usuario->set("dir_01vc",'AQUI');
// $usuario->set("fna_01dt",'1996-01-15');


// $usuario->set("idi_08in",'555');
// $usuario->set("inv_08vc","VEHIELPASS");
// $usuario->set("des_08vc","prasepuedetenertodoelsexoquequieraxd");
// $usuario->set("mma_08fl",'10001');
// $usuario->set("mmi_08fl",'1112');

//$dotos = $usuario->listarInversion();
// $row = mysqli_fetch_array($dotos);
// print_r($dotos);

?>