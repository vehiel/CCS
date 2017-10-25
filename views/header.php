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
  </style>
</head>
<body>
	<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Camara de Ganaderos de Hojancha</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Personas <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="?c=usuario&amp;m=index">Usuarios </a></li>
                            <li role="presentation"><a href="?c=afiliado&amp;m=index">Afiliados </a></li>
                            <li role="presentation"><a href="?c=fiador&amp;m=index">Fiadores </a></li>
                        </ul>
                    </li>
                    <li class="active" role="presentation"><a href="?c=solicitud&amp;m=index">Solicitudes </a></li>
                    <li class="active" role="presentation"><a href="?c=prestamista&amp;m=index">Prestamista</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Inver/Garan <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="?c=inversion&amp;m=index">Inversiones </a></li>
                            <li role="presentation"><a href="?c=garantia&amp;m=index">Garantias </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

		    