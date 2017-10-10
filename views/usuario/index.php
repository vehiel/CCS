	<div class="container">
		<h2>Usuarios</h2>
		<a href="?c=usuario&m=agregar" class="btn btn-default" role="button">Agregar Usuario</a>
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
				<?php if ($rs->num_rows) { ?>
				<thead>
					<tr>
	                    <th>Cédula</th>
					     <th>Nombre</th>
					     <th>Telefono</th>
					     <th>Genero</th>
					     <th>Email</th>
					     <th>Direccion</th>
					     <th>Fecha de Nacimiento</th>
					     <th>Codigo Usuario</th>
					     <th>Contrasenna</th>
					     <th>Codigo de Rol</th>
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
                		 <!--  <td><?php echo $row['ID']; ?></td>
                          <td><?php echo $row['Nombre']; ?></td>
                          <td><?php echo $row['Apellido1']; ?></td>
                          <td><?php echo $row['Apellido2']; ?></td>
                          <td><?php echo $row['Telefono']; ?></td>
                          <td><?php echo $row['Correo']; ?></td>
                          <td><?php echo $row['Direccion']; ?></td> -->
                          <td><?php echo $row[0]; ?></td>
                          <td><?php echo $row[1]; ?></td>
                          <td><?php echo $row[2]; ?></td>
                          <td><?php echo $row[3]; ?></td>
                          <td><?php echo $row[4]; ?></td>
                          <td><?php echo $row[5]; ?></td>
                          <td><?php echo $row[6]; ?></td>
                          <td><?php echo $row[7]; ?></td>
                          <td><?php echo $row[8]; ?></td>
                          <td><?php echo $row[9]; ?></td>
                          <td>
                            <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                              <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu">
                                <li>
                                    <a href="?c=usuario&m=editar&id=<?php echo $row[0]; ?>">
                                    <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                </li>
                                <li>
                                  <a href="?c=usuario&m=eliminar&id=<?php echo $row[0]; ?>">
                                   <span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                                </li>
                                 <li>
                                  <a href="?c=usuario&m=ver&id=<?php echo $row[0]; ?>">
                                   <span class="glyphicon glyphicon-eye-open"></span> ver</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                          </tr>
                     <?php endwhile; ?>
                </tbody>
				<?php }else{?>
					<div class="alert alert-info">
		              <center>
		                <strong>¡Información!</strong> No hay usuarios registrados.
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