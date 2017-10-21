<!-- <!DOCTYPE html>
<html>
<head>
	<title>Editar Usuario</title>
	<link rel="stylesheet" type="text/css" href="libs/css/bootstrap.min.css">
</head>
<body> -->
<br><br>
<div class="box-principal">
<h3 class="titulo">Editar Usuario<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title"><b>Edintando a:</b> <?php echo $datos['Nombre']." ".$datos['Apellido1']." ".$datos['Apellido2']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="?c=usuario&m=editar" method="POST">
				    <div class="form-group">
				      <ul class="list-group">
				      	<li class="list-group-item"> 
				      		<b>Identificacion: </b><?php echo $datos['Cedula']."<br>"; ?>
				      	</li>
				      	<br>
				      	<li class="list-group-item"> 
				      		<b>Numero de Usuario: </b><?php echo $datos['Numero_Usuario']."<br>"; ?>
				      	</li>
				      </ul>
				        <input value="<?php echo $datos['Cedula']; ?>" class="form-control" name="idp_in" type="hidden" >
				        <input value="<?php echo $datos['Numero_Usuario']; ?>" class="form-control" name="nus_in" type="hidden" >
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
				        <select id="gen_in" class="form-control" name="gen_in">
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
				        <input value="<?php echo $datos['Fecha_nac']; ?>" class="form-control" name="fna_dt" type="date" required>
				    </div>
				    <!-- <div class="form-group">
				      <label for="inputEmail" class="control-label">Numero Usuario</label>
				        <input value="<?php echo $datos['nus_in']; ?>" class="form-control" name="nus_in" type="number" required>
				    </div> -->
				    <div class="form-group">
				    	<label for="inputEmail" class="control-label">Estado</label>
				      	<select class="form-control" name="est_in">
				        	<option value="1" <?php echo $datos['Estado']==1? "selected":""; ?>>Activo</option>
				        	<option value="0" <?php echo $datos['Estado']==0? "selected":""; ?>>Inactivo</option>
				        </select> 
				    </div>
				   	<!-- <div class="form-group">
				      <label for="inputEmail" class="control-label">Contraseña</label>
				        <input value="<?php echo $datos['con_vc']; ?>" class="form-control" name="con_vc" type="text" required>
				    </div> -->
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Rol de Usuario</label>
				     (Rol actual: <?php echo $datos['Id_rol']; ?>)
				      <select name="idr_in" class="form-control">
				      	<?php while ($row = mysqli_fetch_array($rol)) { ?>
							<option value="<?php echo $row['idr_03in']; ?>"<?php echo $datos['Id_rol']==$row['idr_03in']? "selected":""; ?>><?php echo $row['rol_03vc'] ?>
							</option>
				        <?php } ?>
				      </select>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Registrar</button>
				    	 <a href="?c=usuario" class="btn btn-warning" role="button">Regresar</a>

				        <!-- <button href="?c=usuario" type="reset" class="btn btn-warning">Regresar</button> -->
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>

	<!-- <script type="text/javascript">
		function populate(s1,s2){
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);
			s2.innerHTML = "";
			if (s1.value=="Chevy") {
				var optionArray = ["|","Camaro|Camaro","Corvette|Corvette"];
			}//value|label 
			else if (s1.value=="Dodge") {
				var optionArray = ["|","Avenger|Avenger","Challenger|Challenger"];
			} else if (s1.value=="Ford") {
				var optionArray = ["|","Mustang|Mustang","Shelby|Shelby"];
			}
			for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			}

		}
	</script> -->
<!-- </body>
</html>