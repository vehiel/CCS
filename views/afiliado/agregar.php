
 	<div class="container">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar </h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=afiliado&m=agregar" method="POST">
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
				        <input class="form-control" name="dir_01vc" type="text" >
				    </div>
				    <div class="form-group">
				     <label for="inputEmail" class="control-label">Fecha Nacimiento</label>
				        <input class="form-control" name="fna_01dt" type="date" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Numero de Afiliado</label>
				        <input class="form-control" name="naf_06in" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Numero de Cuenta</label>
				        <input class="form-control" name="ncu_06vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Estado Actividad</label>
				        <select class="form-control" name="eac_06in">
				        	<option value="1">Activo</option>
				        	<option value="0">Inactivo</option>
				        </select> 
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Estado Morosidad</label>
				        <select class="form-control" name="emo_06in">
				        	<option value="1">Activo</option>
				        	<option value="0">Inactivo</option>
				        </select> 
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Observaciones</label>
				        <input class="form-control" name="obs_06vc" type="text" required>
				    </div>

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