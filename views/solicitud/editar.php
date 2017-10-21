<div class="container">
<!-- <div class="box-principal"> -->
<h3 class="titulo">Editar Solicitud<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title"> <b>Editando solicitud numero:</b> <?php echo $sol['Numero_Sol']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=solicitud&m=editar" method="POST">
	  				
				    <div class="form-group">
				    	<input value="<?php echo $sol['Numero_Sol']; ?>" type="hidden" name="nso_in" >
					    <input value="<?php echo $sol['Fecha_Sol'];; ?>" type="hidden" name="fso_dt">
		  				<input value="<?php echo $sol['Fecha_Rev']; ?>" type="hidden" name="fre_dt">
		  				<input value="<?php echo $sol['Fecha_Apr']; ?>" type="hidden" name="fap_dt">
				   	</div>
				   	<div class="form-group">
				      <label for="inputEmail" class="control-label">Afiliado</label>
				       <select class="form-control" name="naf_in">
				        	<?php while ($row = mysqli_fetch_array($afiliado)) { ?>
				        	<option value="<?php echo $row[7] ?>"<?php echo $sol['Numero_Afi']==$row[7]?"Selected":"";  ?>><?php echo $row['Nombre'];?></option>
				        	<?php } ?>
				        </select>
				    </div>
				    <!-- <div class="form-group">
				      <label for="inputEmail" class="control-label">Identificación</label>
				        <input id="idp_in" value="<?php echo $row[7] ?>" class="form-control" name="" type="text">
				    </div> -->
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Inversión</label>
				        <select value="<?php echo $sol[0]; ?>" class="form-control" name="idi_in">
				        	<?php while ($inv = mysqli_fetch_array($inversion)) { ?>
				        	<option value="<?php echo $inv[0] ?>"<?php echo $sol['Inversion']==$inv[0]?"selected": "" ?>><?php echo $inv[1] ?></option>
				        	<?php } ?>
				        </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Garantia</label>
				        <select class="form-control" name="cga_in">
				        	<option value="900"<?php echo $sol['Garantia']==900?"selected":""?>>Fidosiaria</option>
				        	<option value="901"<?php echo $sol['Garantia']==901?"selected":""?>>Prendaria</option>
				        </select> 
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Monto Capital</label>
				        <input value="<?php echo $sol['Monto_Cap']; ?>" class="form-control" name="mca_fl" type="number" step="any" min="0" required>
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
<!-- </div> -->
</div>
<script type="text/javascript">
	
</script>