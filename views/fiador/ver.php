<br><br>
<div class="container">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Datos de:</b>  <?php echo $datos['Nombre'] ; ?></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Identificacion: </b><?php echo $datos[0]; ?>
            </li>
            <li class="list-group-item">
              <b>Codigo Fiador: </b><?php echo $datos[7]; ?>
            </li>
             <!-- <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['Nombre']; ?>
            </li>
            <li class="list-group-item">
              <b>Primer Apellido: </b><?php echo $datos['ap1_vc']; ?>
            </li>
            <li class="list-group-item">
              <b>Segundo Apellido: </b><?php echo $datos['ap2_vc']; ?>
            </li> -->
            <li class="list-group-item">
              <b>Telefono: </b><?php echo $datos[2]; ?>
            </li>
            <li class="list-group-item">
              <b>Correo Electronico: </b><?php echo $datos[3]; ?>
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
              <b>Empleo: </b><?php echo $datos['Empleo']; ?>
            </li>
          </ul>
        </div>
        <div class="form-group">
             <a href="?c=fiador" class="btn btn-default" role="button">Regresar</a>
        </div>
      </div>
    </div>
  </div>
</div>