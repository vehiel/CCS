
 	<br> <br>
 	<div class="container">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar </h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=prestamista&m=agregar" method="POST">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Codigo del Prestamista</label>
				        <input class="form-control" name="cpr_in" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre del Prestamista</label>
				        <input class="form-control" name="nom_vc" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Interes Anual</label>
				        <input class="form-control" name="ian_fl" type="number" step="any" min="0" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Porcentaje de Morosidad</label>
				         <input class="form-control" name="pmo_fl" type="number" step="any" min="0" required>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Registrar</button>
				        <a href="?c=prestamista" class="btn btn-warning" role="button">Regresar</a>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>