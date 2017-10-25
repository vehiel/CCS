<div class="box-principal">
<h3 class="titulo">Editar Garantia<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title"> <b>Editando a:</b> <?php echo $datos[1]; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=garantia&m=editar" method="POST">
				    <div class="form-group">
				      <ul class="list-group">
				      	<li class="list-group-item"> 
				      		<b>Codigo de Garantia: </b><?php echo $datos[0]; ?>
				      	</li>
				      </ul>
				        <input value="<?php echo $datos[0]; ?>" class="form-control" name="cga_in" type="hidden" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Garantia</label>
				        <input value="<?php echo $datos[1]; ?>" class="form-control" name="gar_vc" type="text" required>
				    </div>
				      <div class="form-group">
				      <label for="inputEmail" class="control-label">Descripción</label>
				        <input value="<?php echo $datos[2]; ?>" class="form-control" name="des_vc" type="text" required>
				    </div>
				  	<div class="form-group">
				    	 <button type="submit" class="btn btn-success">Guardar</button>
				    	 <a href="?c=garantia" class="btn btn-warning" role="button">Regresar</a>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>