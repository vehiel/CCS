	<div class="container">
		<h2>Inversiones</h2>
		<a href="?c=inversion&m=agregar" class="btn btn-default" role="button">Agregar Inversion</a>
		<div class="table-responsive">
			<!-- <div class="col-md-12"> -->
				<table id="example" class="display" cellspacing="0" width="100%">
				<?php if ($rs->num_rows) { ?>
				<thead>
					<tr>
	                    <th>Código de Inversión</th>
	                    <th>Inversión</th>
	                    <th>Destino de la Inversión</th>
	                    <th>Monto Máximo</th>
	                    <th>Monto Mínimo</th>
	                   
                   <!--    <?php  
                       foreach ($info as $valor) {?>
                        <th><?php echo $valor->name ?></th>
                        
                    <?php   }?> -->
	                   <th style="width: 120px;"></th>
          </tr>
				</thead>
				<tfoot>
                    <tr>
                     <th>Código de Inversión</th>
                      <th>Inversión</th>
                      <th>Destino de la Inversión</th>
                      <th>Monto Máximo</th>
                      <th>Monto Mínimo</th>
                      <!-- <?php  
                       foreach ($info as $valor) {?>
                        <th><?php echo $valor->name ?></th>
                        
                    <?php   }?> -->
                     <th style="width: 120px;"></th>
          </tr>
         </tfoot>
                <tbody>
                	 <?php while ($row = mysqli_fetch_array($rs)):?>
                        <tr>
                		  <td><a href="?c=inversion&m=ver&id=<?php echo $row[0] ?>"><?php echo $row[0]; ?></a></td>
                          <td><?php echo $row[1]; ?></td>
                          <td><?php echo $row[2]; ?></td>
                          <td><?php echo $row[3]; ?></td>
                          <td><?php echo $row[4]; ?></td>
                          <td>
                            <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                              <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu">
                                <li>
                                    <a href="?c=inversion&m=editar&id=<?php echo $row[0]; ?>">
                                    <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                </li>
                                <li>
                                  <a href="?c=inversion&m=eliminar&id=<?php echo $row[0]; ?>">
                                   <span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                                </li>
                                 <li>
                                  <a href="?c=inversion&m=ver&id=<?php echo $row[0]; ?>">
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
		                <strong>¡Información!</strong> No hay afiliados registrados.
		              </center>
		            </div>
				<?php } ?>
			</table>
		  <!-- </div> -->
		</div>
	</div>
<script  src="libs/js/jquery-1.12.4.js"></script>
<script  src="libs/js/jquery.dataTables.min.js"></script>
<script  src="libs/js/bootstrap.min.js"></script>
<script  src="libs/js/script.js"></script>
<!-- </body>
</html> -->