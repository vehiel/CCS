<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Camara de Ganaderos</title>
	<link rel="stylesheet" type="text/css" href="libs/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="libs/css/3.3.7/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
   <style>
   /*esto wea es para la clase modal de recuperar contra*/
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>s
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="?c=usuario">Camara de Ganaderos de Hojancha</a>
		    </div>
		    
		      <ul class="nav navbar-nav">
		       
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Personas <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="?c=usuario&m=index">Usuario</a></li>
		             <li><a href="?c=fiador&m=index">Fiador</a></li>
		            <li><a href="?c=afiliado&m=index">Afiliado</a></li>
			            <!-- <?php  
			            foreach ($pri as $li) {
						echo $li['LIS_04VC'];
						}?> -->
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inv/Sol <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="?c=Inversion&m=index">Inversiones</a></li>
					<li><a href="?c=solicitud&m=index">Solicitudes</a></li>
		          </ul>
		        </li>
		        
		      </ul>

		    
		  </div>
		</nav>
	<br><br>
		    