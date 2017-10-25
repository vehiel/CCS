	<div class="container">
		<h2>Garantia</h2>
		<a href="?c=garantia&m=agregar" class="btn btn-default" role="button">Agregar Garantia</a>
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
				<?php if ($rs->num_rows) { ?>
				<thead>
					<tr>
	                    <th>Código de Garantía</th>
	                    <th>Garantía</th>
	                    <th>Descripción</th>
	                    <th style="width: 120px;">Más</th>
                	</tr>
				</thead>
				 <tfoot>
                  <tr>
                      <th>Código de Garantía</th>
                      <th>Garantía</th>
                      <th>Descripción</th>
                   	<th style="width: 120px;">Más</th>
                  </tr>
                </tfoot>
                <tbody>
                	 <?php while ($row = mysqli_fetch_array($rs)):?>
                        <tr>
                           <td><a href="?c=garantia&m=ver&id=<?php echo $row[0] ?>"><?php echo $row[0]; ?></a></td>
                          <td><?php echo $row[1]; ?></td>
                          <td><?php echo $row[2]; ?></td>
                          <td>
                            <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                              <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu">
                                <li>
                                    <a href="?c=garantia&m=editar&id=<?php echo $row[0]; ?>">
                                    <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                </li>
                                <li>
                                  <a href="?c=garantia&m=eliminar&id=<?php echo $row[0]; ?>">
                                   <span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                                </li>
                                 <li>
                                  <a href="?c=garantia&m=ver&id=<?php echo $row[0]; ?>">
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
		                <strong>¡Información!</strong> No hay garantias registradas.
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