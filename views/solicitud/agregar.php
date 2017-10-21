
 	<div class="container">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=solicitud&m=agregar" method="POST">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Numero de Solicitud</label>
				        <input class="form-control" name="nso_in" type="number" required>
				    </div>
				    <div class="col-md-12">
					  	<div class="form-group col-md-5">
					      <label for="inputEmail" class="control-label">Afiliado</label>
					       <select class="form-control" name="naf_in">
					        	<?php while ($row = mysqli_fetch_array($afiliado)) { ?>
					        	<option value="<?php echo $row[7];?>"><?php echo $row['Nombre'];?></option>
					        	<?php } ?>
					        </select>
					    </div>
					<!-- </div> -->
					<div class="col-md-1"></div>
					<!-- <div class="col-md-5"> -->
					  	<div class="form-group col-md-5">
					      <label for="inputEmail" class="control-label">Cédula</label>
					       <input id="idp_in" value="TODAVIA NO FUNCIONA" class="form-control" name="idp_in" type="text" >
					    </div>
					</div>
					<div class="col-md-1"></div>
				   	<div class="form-group">
				      <label for="inputEmail" class="control-label">Inversion</label>
				        <select class="form-control" name="idi_in">
				        	<?php while ($row = mysqli_fetch_array($inversion)) { ?>
				        	<option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
				        	<?php } ?>
				        </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Garantia</label>
				        <select class="form-control" name="cga_in">
				        	<option value="900">Prendaria</option>
				        	<option value="901">Fidosiaria</option>
				        </select> 
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Monto Capital</label>
				        <input class="form-control" name="mca_fl" type="number" step="any" min="0" required>
				    </div>
				    <div class="form-group">
				    	<button type="submit" class="btn btn-success">Registrar</button>
				        <a href="?c=solicitud" class="btn btn-warning" role="button">Regresar</a>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>