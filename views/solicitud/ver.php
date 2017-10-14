<br><br>
<div class="container">
  <div class="col-md-6"></div>
  <div class="panel panel-success col-md-12">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Visializar solicitud</b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
      
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Numero de Solicitud: </b><?php echo $sol[0]; ?>
            </li>
            <li class="list-group-item">
              <b>Afiliado: </b><?php echo $sol[1]; ?>
            </li>
            <li class="list-group-item">
              <b>Inversion: </b><?php echo $sol[2]; ?>
            </li>
            <li class="list-group-item">
              <b>Tipo de Garantia: </b><?php echo $sol[3]; ?>
            </li>
            <li class="list-group-item">
              <b>Fecha de Solicitud: </b><?php echo $sol[4]; ?>
            </li>
            <li class="list-group-item">
              <b>Fecha de Revision: </b><?php echo $sol[5]; ?>
            </li>
            <li class="list-group-item">
              <b>Fecha de Aprovacion: </b><?php echo $sol[6]; ?>
            </li>
            <li class="list-group-item">
              <b>Estado: </b><?php echo $sol[7]; ?>
            </li>
            <li class="list-group-item">
              <b>Monto Capital: </b><?php echo $sol[8]; ?>
            </li>
          </ul>
        </div>
        
        <div class="col-md-6">
         <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
             <!-- <span class="caret"></span> -->
            </button>
            <ul class="dropdown-menu">
              <li>
                <a href="?c=solicitud&m=editar&id=<?php echo $sol[0]; ?>">
                  <span class="glyphicon glyphicon-pencil"></span> Editar</a>
              </li>
              <li>
                <a href="?c=solicitud&m=aprovar&id=<?php echo $sol[0]; ?>">
                  <span class="glyphicon glyphicon-trash"></span>Aprovar Solicitud</a>
              </li>
              <li>
                <a href="?c=solicitud&m=rechazar&id=<?php echo $sol[0]; ?>">
                  <span class="glyphicon glyphicon-trash"></span>Rechazar Solicitud</a>
              </li>
              <li>
                <a href="?c=solicitud&m=cancelar&id=<?php echo $sol[0]; ?>">
                  <span class="glyphicon glyphicon-trash"></span>Cancelar Solicitud</a>
              </li>
            </ul>
         </div>
         <div class="form-group">
             <a href="?c=solicitud" class="btn btn-default" role="button">Regresar</a>
        </div>
       </div> 
        
        </div>
        </div>
      </div>
    </div>
<script  src="libs/js/jquery-1.12.4.js"></script>
<script  src="libs/js/bootstrap.min.js"></script>