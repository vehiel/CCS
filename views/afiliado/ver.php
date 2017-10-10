<br><br>
<div class="container">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Datos de:</b> <?php echo $datos['nom_01vc'] ." ".$datos['ap1_01vc'] ." ".$datos['ap2_01vc']; ?></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Identificacion: </b><?php echo $datos['idp_01in']; ?>
            </li>
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['nom_01vc']; ?>
            </li>
            <li class="list-group-item">
              <b>Primer Apellido: </b><?php echo $datos['ap1_01vc']; ?>
            </li>
            <li class="list-group-item">
              <b>Segundo Apellido: </b><?php echo $datos['ap2_01vc']; ?>
            </li>
            <li class="list-group-item">
              <b>Telefono: </b><?php echo $datos['tel_01vc']; ?>
            </li>
            <li class="list-group-item">
              <b>Correo Electronico: </b><?php echo $datos['ema_01vc']; ?>
            </li>
            <li class="list-group-item">
              <b>Direccion: </b><?php echo $datos['dir_01vc']; ?>
            </li>
            <li class="list-group-item">
              <b>Genero: </b><?php echo $datos['gen_01in']; ?>
            </li>
            <li class="list-group-item">
              <b>Fecha Nacimiento: </b><?php echo $datos['fna_01dt']; ?>
            </li>
            <li class="list-group-item">
              <b>Numero Afiliado: </b><?php echo $datos['naf_06in']; ?>
            </li>
            <li class="list-group-item">
              <b>Numero de Cuenta: </b><?php echo $datos['ncu_06vc']; ?>
            </li>
            <li class="list-group-item">
              <b>Estado Actividad: </b><?php echo $datos['eac_06in']; ?>
            </li>
            <li class="list-group-item">
              <b>Estado Morosidad: </b><?php echo $datos['emo_06in']; ?>
            </li>
            <li class="list-group-item">
              <b>Observaciones: </b><?php echo $datos['obs_06vc']; ?>
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