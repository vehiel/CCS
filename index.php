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

//require_once "models/usuario.php";

//$usuario = new Usuario();
// $usuario->set("idp_01in",'504080764');
// $usuario->set("nom_01vc",'VEHIEL');
// $usuario->set("ap1_01vc",'ALEMAN');
// $usuario->set("ap2_01vc",'campos');
// $usuario->set("tel_01vc",'87221859');
// $usuario->set("gen_01in",'1');
// $usuario->set("ema_01vc",'VE@GMAIL.COM');
// $usuario->set("dir_01vc",'AQUI');
// $usuario->set("fna_01dt",'1996-01-15');


// $usuario->set("nus_02in",'555');
// $usuario->set("con_02vc",'VEHIELPASS');
// $usuario->set("nic_02vc",'1');
// $usuario->set("idr_03in",'1');
//$usuario->buscarUsuario(504080760);


?>