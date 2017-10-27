
 	<div class="container">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar </h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=garantia&m=agregar" method="POST">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Codigo de Garantia</label>
				        <input class="form-control" name="cga_in" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Garantia</label>
				        <input class="form-control" name="gar_vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Descripción</label>
				        <input class="form-control" name="des_vc" type="text" required>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Registrar</button>
				        <a href="?c=garantia" class="btn btn-warning" role="button">Regresar</a>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>