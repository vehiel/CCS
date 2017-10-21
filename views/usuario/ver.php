<br><br>
<div class="container">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Datos de:</b> <?php echo $datos['Nombre']; ?></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Identificacion: </b><?php echo $datos[0]; ?>

            </li>
             <li class="list-group-item">
              <b>Numero Usuario: </b><?php echo $datos[7]; ?>
            </li>
            <!-- <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['nombre']; ?>
            </li>
            <li class="list-group-item">
              <b>Primer Apellido: </b><?php echo $datos['apellido1']; ?>
            </li>
            <li class="list-group-item">
              <b>Segundo Apellido: </b><?php echo $datos['apellido2']; ?>
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
              <b>Genero: </b><?php echo $datos[3];?>
            </li>
            <li class="list-group-item">
              <b>Fecha Nacimiento: </b><?php echo $datos['Fecha de Nacimiento']; ?>
            </li>
            <li class="list-group-item">
              <b>Rol: </b><?php echo $datos[9]; ?>
            </li>
           
          </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
             <!-- <span class="caret"></span> -->
            </button>
            <ul class="dropdown-menu">
              <li>
                <a href="#recuperarCon" data-toggle="modal">Recuperar</a>
              </li>
              
          </ul>
        </div>
        <div class="form-group">
             <a href="?c=usuario" class="btn btn-default" role="button">Regresar</a>
             
              <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
        </div>
        
    </div>
  </div>
</div>
<!-- <a data-toggle="modal" href="#myModal">Open Modal</a> -->

  <div class=" modal fade" id="recuperarCon" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><!-- <span class="glyphicon glyphicon-lock"> </span>--> Recuperacion de la contraeña</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="?c=usuario&m=editarCon" method="POST">
            <input type="hidden" name="idp_in" value="<?php echo $datos[0]; ?>">
            <div class="form-group">
              <label for="con">Nueva contraseña</label>
              <input id="con" type="text" name="con" class="form-control">
            </div>
            <div class="form-group">
              <label for="con">Repita la contraseña</label>
              <input id="con" type="passw" name="Rcon" class="form-control">
            </div>
             <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>    
</div>

<script  src="libs/js/jquery-1.12.4.js"></script>
<script  src="libs/js/bootstrap.min.js"></script>