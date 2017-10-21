	<div class="container">
		<h2>Fiadores</h2>
		<a href="?c=fiador&m=agregar" class="btn btn-default" role="button">Agregar Fiador</a>
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
				<?php if ($datos->num_rows) { ?>
				<thead>
					<tr>
	                    <th>Cédula</th>
	                    <th>Nombre</th>
	                    <th>Teléfono</th>
                      <th>Género</th>
                      <th>Email</th>
                      <th>Dirección</th>
                      <!-- <th>Fecha Nacimiento</th> -->
	                    <th>Código Fiador</th>
                      <th>Empleo</th>
	                    <th style="width: 120px;"></th>
                	</tr>
				</thead>
				 <tfoot>
                  <tr>
                      <th>Cédula</th>
                      <th>Nombre</th>
                      <th>Teléfono</th>
                      <th>Género</th>
                      <th>Email</th>
                      <th>Dirección</th>
                      <!-- <th>Fecha Nacimiento</th> -->
                      <th>Código Fiador</th>
                      <th>Empleo</th>
                      <th style="width: 120px;"></th>
                  </tr>
                </tfoot>
                <tbody>
                	 <?php while ($row = mysqli_fetch_array($datos)):?>
                        <tr>
                		  <td><a href="?c=fiador&m=ver&id=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>
                          <td><?php echo $row[1]; ?></td>
                          <td><?php echo $row[2]; ?></td>
                          <td><?php echo $row[3]; ?></td>
                          <td><?php echo $row[4]; ?></td>
                          <td><?php echo $row[5]; ?></td>
                          <!-- <td><?php echo $row[6]; ?></td> -->
                          <td><?php echo $row[7]; ?></td>
                          <td><?php echo $row[8]; ?></td>
                          <td>
                            <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                              <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu">
                                <li>
                                    <a href="?c=fiador&m=editar&id=<?php echo $row[0]; ?>">
                                    <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                </li>
                                <li>
                                  <a href="?c=fiador&m=eliminar&id=<?php echo $row[0]; ?>">
                                   <span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                                </li>
                                 <li>
                                  <a href="?c=fiador&m=ver&id=<?php echo $row[0]; ?>">
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
		                <strong>¡Información!</strong> No hay fiadores registrados.
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