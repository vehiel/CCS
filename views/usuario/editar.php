<!-- <!DOCTYPE html>
<html>
<head>
	<title>Editar Usuario</title>
	<link rel="stylesheet" type="text/css" href="libs/css/bootstrap.min.css">
</head>
<body> -->
	
<div class="box-principal">
<h3 class="titulo">Editar Usuario<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title"><b>Edintando a:</b> <?php echo $datos['nom_01vc'] ." ".$datos['ap1_01vc'] ." ".$datos['ap2_01vc']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=usuario&m=editar" method="POST">
				    <div class="form-group">
				      <ul class="list-group">
				      	<li class="list-group-item"> 
				      		<b>Identificacion: </b><?php echo $datos['idp_01in']; ?>
				      	</li>
				      </ul>
				        <input value="<?php echo $datos['idp_01in']; ?>" class="form-control" name="idp_01in" type="hidden" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre</label>
				        <input value="<?php echo $datos['nom_01vc']; ?>" class="form-control" name="nom_01vc" type="text" required>
				    </div>
				      <div class="form-group">
				      <label for="inputEmail" class="control-label">Primer Apellido</label>
				        <input value="<?php echo $datos['ap1_01vc']; ?>" class="form-control" name="ap1_01vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Segundo Apellido</label>
				        <input value="<?php echo $datos['ap2_01vc']; ?>" class="form-control" name="ap2_01vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Genero</label>
				        <select class="form-control" name="gen_01in">
				        	<option value="1">Masculino</option>
				        	<option value="2">Femenino</option>
				        </select> 
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Telefono</label>
				        <input value="<?php echo $datos['tel_01vc']; ?>" class="form-control" name="tel_01vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Correo</label>
				        <input value="<?php echo $datos['ema_01vc']; ?>" class="form-control" name="ema_01vc" type="text" required>
				    </div>
		  		    <div class="form-group">
				      <label for="inputEmail" class="control-label">Direccion</label>
				        <input value="<?php echo $datos['dir_01vc']; ?>" class="form-control" name="dir_01vc" type="text" required>
				    </div>
				     <div class="form-group">
				      <label for="inputEmail" class="control-label">Fecha Nacimiento</label>
				        <input value="<?php echo $datos['fna_01dt']; ?>" class="form-control" name="fna_01dt" type="date" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Numero Usuario</label>
				        <input value="<?php echo $datos['nus_02in']; ?>" class="form-control" name="nus_02in" type="number" required>
				    </div>
				    <div class="form-group">
				    	
				      <label for="inputEmail" class="control-label">Estado</label>
				      (Estado actual: <?php echo $datos['est_02vc']; ?>)
				        <select class="form-control" name="est_02vc">
				        	<option value="1">Activo</option>
				        	<option value="0">Inactivo</option>
				        </select> 
				    </div>
				   	<div class="form-group">
				      <label for="inputEmail" class="control-label">Contraseña</label>
				        <input value="<?php echo $datos['con_02vc']; ?>" class="form-control" name="con_02vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Rol de Usuario</label>
				      <!-- asi se cargar un dropdown list desde la base de datos -->
				      <select name="idr_03in" class="form-control">
				      	<?php while ($row = mysqli_fetch_array($rol)) { ?>
				        	<option value="<?php echo $row['IDR_03IN'] ?>"><?php echo $row['ROL_03VC'] ?></option>s
				        <?php } ?>
				      </select>
				    </div>
				   <!--  <div class="form-group">
				      <label for="inputEmail" class="control-label">Imagen</label>
				        <input class="form-control" name="imagen" id="imagen" type="file" required>
				      < se usa type= file para archivos >
				    </div> -->
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Registrar</button>
				    	 <a href="?c=usuario" class="btn btn-warning" role="button">Regresar</a>

				        <!-- <button href="?c=usuario" type="reset" class="btn btn-warning">Regresar</button> -->
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>
<!-- </body>
</html> -->