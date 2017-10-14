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

// require_once "models/solicitud.php";

// $usuario = new Solicitud();

// $hoy= getdate();
// $fecha = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
// $usuario->set("nso_in",'101');
// $usuario->set("naf_in",'600');
// $usuario->set("idi_in",'800');
// $usuario->set("cga_in",'901');
// $usuario->set("fso_dt","$fecha");
// $usuario->set("fre_dt",'null');
// $usuario->set("fap_dt",'null');
// $usuario->set("est_in",'1');
// $usuario->set("mca_fl",'123456789');
// $usuario->insertarSolicitud();



// $usuario->set("idi_08in",'555');
// $usuario->set("inv_08vc","VEHIELPASS");
// $usuario->set("des_08vc","prasepuedetenertodoelsexoquequieraxd");
// $usuario->set("mma_08fl",'10001');
// $usuario->set("mmi_08fl",'1112');

// $dotos = $usuario->buscarSolicitud(101);
// // $row = mysqli_fetch_array($dotos);
//  print_r($dotos);

?>