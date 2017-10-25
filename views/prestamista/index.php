	<div class="container">
		<h2>Prestamista</h2>
		<a href="?c=prestamista&m=agregar" class="btn btn-default" role="button">Agregar Prestamista</a>
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="display" cellspacing="0" width="100%">
				<?php if ($rs->num_rows) { ?>
				<thead>
					<tr>
	                   <!--  <th>Cédula</th>
	                    <th>Nombre</th>
	                    <th>Primer Apellido</th>
	                    <th>Segundo Apellido</th>
	                    <th>Telefono</th>
	                    <th>Correo</th>
	                    <th>Direccion</th> -->
                      <?php  
                       foreach ($info as $valor) {?>
                        <th><?php echo $valor->name ?></th>
                        
                    <?php   }?>
	                   <th style="width: 120px;">Más</th>
          </tr>
				</thead>
				<tfoot>
                    <tr>
                     <!--  <th>Cédula</th>
                      <th>Nombre</th>
                      <th>Primer Apellido</th>
                      <th>Segundo Apellido</th>
                      <th>Telefono</th>
                      <th>Correo</th>
                      <th>Direccion</th> -->
                      <?php  
                       foreach ($info as $valor) {?>
                        <th><?php echo $valor->name ?></th>
                        
                    <?php   }?>
                     <th style="width: 120px;">Más</th>
          </tr>
         </tfoot>
                <tbody>
                	 <?php while ($row = mysqli_fetch_array($rs)):?>
                        <tr>
                		  <td><a href="?c=prestamista&m=ver&id=<?php echo $row[0] ?>"><?php echo $row[0]; ?></a></td>
                          <td><?php echo $row[1]; ?></td>
                          <td><?php echo $row[2]; ?></td>
                          <td><?php echo $row[3]; ?></td> 
                          <td>
                            <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                              <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu">
                                <li>
                                    <a href="?c=prestamista&m=editar&id=<?php echo $row[0]; ?>">
                                    <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                </li>
                                <li>
                                  <a href="?c=prestamista&m=eliminar&id=<?php echo $row[0]; ?>">
                                   <span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                                </li>
                                 <li>
                                  <a href="?c=prestamista&m=ver&id=<?php echo $row[0]; ?>">
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
		                <strong>¡Información!</strong> No hay prestamista registrados.
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