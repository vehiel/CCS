<br><br>
<div class="container">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Datos de:</b> <?php echo $datos[1]; ?></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item">
              <b>ID Inversion: </b><?php echo $datos[0]; ?>
            </li>
            <li class="list-group-item">
              <b>Inversion: </b><?php echo $datos[1]; ?>
            </li>
            <li class="list-group-item">
              <b>Destino de la Inversion: </b><?php echo $datos[2]; ?>
            </li>
            <li class="list-group-item">
              <b>Monto Maximo: </b><?php echo $datos[3]; ?>
            </li>
            <li class="list-group-item">
              <b>Monto Minimo: </b><?php echo $datos[4]; ?>
            </li>
          </ul>
        </div>
        <div class="form-group">
             <a href="?c=inversion" class="btn btn-default" role="button">Regresar</a>
        </div>
      </div>
    </div>
  </div>
</div>