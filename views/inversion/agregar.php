
 	<div class="container">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar </h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=inversion&m=agregar" method="POST">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">ID Inversion</label>
				        <input class="form-control" name="idi_in" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Inversion</label>
				        <input class="form-control" name="inv_vc" type="text" required>
				    </div>
					<div class="form-group">
				      <label for="inputEmail" class="control-label">Destino</label>
				        <input class="form-control" name="des_vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Monto Maximo</label>
				        <input class="form-control" name="mma_fl" type="number" step="any" min="0" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Monto Minimo</label>
				         <input class="form-control" name="mmi_fl" type="number" step="any" min="0" required>
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