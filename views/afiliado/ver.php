<br><br>
<div class="container">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Datos de:</b> <?php echo $datos['Nombre'];?></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Identificacion: </b><?php echo $datos[0]; ?>
            </li>
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['Nombre']; ?>
            </li>
           <!--  <li class="list-group-item">
              <b>Primer Apellido: </b><?php echo $datos['ap1_vc']; ?>
            </li>
            <li class="list-group-item">
              <b>Segundo Apellido: </b><?php echo $datos['ap2_vc']; ?>
            </li> -->
            <li class="list-group-item">
              <b>Telefono: </b><?php echo $datos[2]; ?>
            </li>
            <li class="list-group-item">
              <b>Correo Electronico: </b><?php echo $datos['Email']; ?>
            </li>
            <li class="list-group-item">
              <b>Direccion: </b><?php echo $datos[5]; ?>
            </li>
            <li class="list-group-item">
              <b>Genero: </b><?php echo $datos[3]; ?>
            </li>
            <li class="list-group-item">
              <b>Fecha Nacimiento: </b><?php echo $datos['Fecha de Nacimiento']; ?>
            </li>
            <li class="list-group-item">
              <b>Numero Afiliado: </b><?php echo $datos[7]; ?>
            </li>
            <li class="list-group-item">
              <b>Numero de Cuenta: </b><?php echo $datos[8]; ?>
            </li>
            <li class="list-group-item">
              <b>Estado Actividad: </b><?php echo $datos['Estado Actividad']; ?>
            </li>
            <li class="list-group-item">
              <b>Estado Morosidad: </b><?php echo $datos['Estado de Morosidad']; ?>
            </li>
            <li class="list-group-item">
              <b>Observaciones: </b><?php echo $datos['Observaciones']; ?>
            </li>
          </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
             <!-- <span class="caret"></span> -->
            </button>
            <ul class="dropdown-menu">
              <li>
                <a href="?c=afiliado&m=inactivarAfi&id=<?php echo $datos[0]; ?>" data-toggle="modal">Inactivar</a>
              </li>
              
          </ul>
        </div>
        <div class="form-group">
             <a href="?c=afiliado" class="btn btn-default" role="button">Regresar</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script  src="libs/js/jquery-1.12.4.js"></script>
<script  src="libs/js/bootstrap.min.js"></script>