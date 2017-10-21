<div class="box-principal">
<h3 class="titulo">Editar Fiador<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title"><b>Editando a:</b> <?php echo $datos['Nombre'] ." ".$datos['Apellido1'] ." ".$datos['Apellido2']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=fiador&m=editar" method="POST">
				    <div class="form-group">
				      <ul class="list-group">
				      	<li class="list-group-item"> 
				      		<b>Identificacion: </b><?php echo $datos['Cedula']; ?>
				      	</li>
				      	<br>
				      	<li class="list-group-item"> 
				      		<b>Numero de Fiador: </b><?php echo $datos['Id_Fiador']; ?>
				      	</li>
				      </ul>
				        <input value="<?php echo $datos['Cedula']; ?>" class="form-control" name="idp_in" type="hidden" required>
				          <input value="<?php echo $datos['Id_Fiador']; ?>" class="form-control" name="idf_in" type="hidden" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre</label>
				        <input value="<?php echo $datos['Nombre']; ?>" class="form-control" name="nom_vc" type="text" required>
				    </div>
				      <div class="form-group">
				      <label for="inputEmail" class="control-label">Primer Apellido</label>
				        <input value="<?php echo $datos['Apellido1']; ?>" class="form-control" name="ap1_vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Segundo Apellido</label>
				        <input value="<?php echo $datos['Apellido2']; ?>" class="form-control" name="ap2_vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Genero</label>
				        <select class="form-control" name="gen_in">
				        	<option value="1" <?php echo $datos['Genero'] ==1? "selected": "";?>>Masculino</option>
				        	<option value="0"<?php echo $datos['Genero'] ==0? "selected": ""; ?>>Femenino</option>
				        </select> 
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Telefono</label>
				        <input value="<?php echo $datos['Telefono']; ?>" class="form-control" name="tel_vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Correo</label>
				        <input value="<?php echo $datos['Email']; ?>" class="form-control" name="ema_vc" type="text" required>
				    </div>
		  		    <div class="form-group">
				      <label for="inputEmail" class="control-label">Direccion</label>
				        <input value="<?php echo $datos['Direccion']; ?>" class="form-control" name="dir_vc" type="text" required>
				    </div>
				     <div class="form-group">
				      <label for="inputEmail" class="control-label">Fecha Nacimiento</label>
				        <input value="<?php echo $datos['Fecha_Nac']; ?>" class="form-control" name="fna_dt" type="date" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Empleo</label>
				        <input value="<?php echo $datos['Empleo']; ?>" class="form-control" name="emp_vc" type="text" required>
				    </div>
				  	<div class="form-group">
				    	 <button type="submit" class="btn btn-success">Guardar</button>
				    	 <a href="?c=fiador" class="btn btn-warning" role="button">Regresar</a>

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