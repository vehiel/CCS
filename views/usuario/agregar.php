 <!-- <!DOCTYPE html>
 <html>
 <head>
 	<title>Agregar Usuario</title>
 	<link rel="stylesheet" type="text/css" href="libs/css/bootstrap.min.css">
 </head>
 <body> -->
 	<div class="container">
	<!-- <h3 class="titulo">Agregar Persona<hr></h3> -->
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar Usuario</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=usuario&m=agregar" method="POST">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Identificacion</label>
				        <input class="form-control" name="idp_01in" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre</label>
				        <input class="form-control" name="nom_01vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Primer Apellido</label>
				        <input class="form-control" name="ap1_01vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Segundo Apellido</label>
				        <input class="form-control" name="ap2_01vc" type="text" required>
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
				        <input class="form-control" name="tel_01vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Correo</label>
				        <input class="form-control" name="ema_01vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Direccion</label>
				        <input class="form-control" name="dir_01vc" type="" required>
				    </div>
				     <div class="form-group">
				      <label for="inputEmail" class="control-label">Fecha Nacimiento</label>
				        <input class="form-control" name="fna_01dt" type="date" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Numero Usuario</label>
				        <input class="form-control" name="nus_02in" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Contraseña</label>
				        <input class="form-control" name="con_02vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Rol de Usuario</label>
				      <!-- asi se cargar un dropdown list desde la base de datos -->
				      <select name="idr_03in" class="form-control">
				      	<?php while ($row = mysqli_fetch_array($rs)) { ?>
				        	<option value="<?php echo $row['IDR_03IN'] ?>"><?php echo $row['ROL_03VC'] ?></option>
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
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>
 
<!--  </body>
 </html> -->