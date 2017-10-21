	<div class="container">
		<h2>Solicitud de Credito</h2>
		<a href="?c=solicitud&m=Agregar" class="btn btn-default" role="button">Agregar Solicitud</a>
    <!-- <a href="?c=solicitud&m=editarCon" class="btn btn-default" role="button">Actualizar Contraseña</a> -->
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
				<?php if ($rs->num_rows) { ?>
				<thead>
					<tr>
	          <?php foreach ($info as $valor) {?>
              <th><?php echo $valor->name ?></th>
                        
            <?php   }?>
	          <th style="width: 120px;">Más</th>
          </tr>
				</thead>
				 <!-- <tfoot>
                  <tr>
                    <th>Cédula</th>
	                <th>Nombre</th>
	                <th>Primer Apellido</th>
	                <th>Segundo Apellido</th>
	                <th>Telefono</th>
	                <th>Correo</th>
	                <th>Direccion</th>
                   	<th style="width: 120px;">Más</th>
                  </tr>
                </tfoot> -->
                <tbody>
                	 <?php while ($row = mysqli_fetch_array($rs)):?>
                        <tr>
                		  <td><a href="?c=solicitud&m=ver&id=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>
                          <td><?php echo $row[1]; ?></td>
                          <td><?php echo $row[2]; ?></td>
                          <td><?php echo $row[3]; ?></td>
                          <td><?php echo $row[4]; ?></td>
                          <td><?php echo $row[5]; ?></td>
                          <td><?php echo $row[6]; ?></td>
                          <!-- <td><?php echo $row[7]; ?></td>
                          <td><?php echo $row[8]; ?></td>
                          <td><?php echo $row[9]; ?></td> -->
                          <td>
                            <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                              <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu">
                                <li>
                                    <a href="?c=solicitud&m=editar&idS=<?php echo $row[0]; ?>">
                                    <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                </li>
                                <li>
                                  <a href="?c=solicitud&m=eliminar&id=<?php echo $row[0]; ?>">
                                   <span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                                </li>
                                 <li>
                                  <a href="?c=solicitud&m=ver&id=<?php echo $row[0]; ?>">
                                   <span class="glyphicon glyphicon-eye-open"></span> ver</a>
                                </li><!-- glyphicon glyphicon-menu-hamburger -->
                                <!-- <li>
                                  <a href="?c=solicitud&m=aprovar&id=<?php echo $row[0]; ?>">
                                    <span class="glyphicon glyphicon-trash"></span>Aprovar Solicitud</a>
                                </li> -->
                              </ul>
                            </div>
                          </td>
                          </tr>
                     <?php endwhile; ?>
                </tbody>
				<?php }else{?>
					<div class="alert alert-info">
		              <center>
		                <strong>¡Información!</strong> No hay afiliados registrados.
		              </center>
		            </div>
				<?php } ?>
			</table>
		  </div>
		</div>
	</div>
<script  src="libs/js/jquery-1.12.4.js"></script>
<script  src="libs/js/jquery.dataTables.min.js"></script>
<script  src="libs/js/bootstrap.min.js"></script>
<script  src="libs/js/script.js"></script>
<!-- </body>
</html> -->