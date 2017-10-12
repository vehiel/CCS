<div class="box-principal">
<h3 class="titulo">Editar Fiador<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title"><b>Editando a:</b> <?php echo $datos['nom_01vc'] ." ".$datos['ap1_01vc'] ." ".$datos['ap2_01vc']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=fiador&m=editar" method="POST">
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
				        	<option value="<?php echo $datos['gen_01in']; ?>">Sin Cambios</option>
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
				      <label for="inputEmail" class="control-label">ID Fiador</label>
				        <input value="<?php echo $datos['idf_07vc']; ?>" class="form-control" name="idf_07in" type="number" required>
				    </div>
				    
				   	<div class="form-group">
				      <label for="inputEmail" class="control-label">Empleo</label>
				        <input value="<?php echo $datos['emp_07vc']; ?>" class="form-control" name="emp_07vc" type="text" required>
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