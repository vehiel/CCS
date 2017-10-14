<div class="box-principal">
<h3 class="titulo">Editar Afiliado<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title"> <b>Editando solicitud numero:</b> <?php echo $sol[0]; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=solicitud&m=editar" method="POST">
	  				
				    <div class="form-group">
				    	<div class="form-group">
				        <input value="<?php echo $sol[0]; ?>" type="hidden" name="nso_in" >
					    <input value="<?php echo $sol[4];; ?>" type="hidden" name="fso_dt">
		  				<input value="<?php echo $sol[5]; ?>" type="hidden" name="fre_dt">
		  				<input value="<?php echo $sol[6]; ?>" type="hidden" name="fap_dt">
				   		 </div>
				      <label for="inputEmail" class="control-label">Afiliado</label>
				       <select value="<?php echo $sol[1]; ?>" class="form-control" name="naf_in">
				        	<?php while ($row = mysqli_fetch_array($afiliado)) { ?>
				        	<option value="<?php echo $row[1] ?>"><?php echo $row[2]." ".$row[3]." ".$row[4] ?></option>
				        	<?php } ?>
				        </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Inversion</label>
				        <select value="<?php echo $sol[0]; ?>" class="form-control" name="idi_in">
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
				        <input value="<?php echo $sol[8]; ?>" class="form-control" name="mca_fl" type="number" step="any" min="0" required>
				    </div>
				  	<div class="form-group">
				    	 <button type="submit" class="btn btn-success">Guardar</button>
				    	 <a href="?c=solicitud" class="btn btn-warning" role="button">Regresar</a>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>