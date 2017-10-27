	<div class="container">
		<h2>Afiliados</h2>
		<a href="?c=afiliado&m=agregar" class="btn btn-default" role="button">Agregar Afiliado</a>
    <!-- <button id="btn" onclick="esconder()">ver</button> -->
  <div id="div_loader">
		<div id="div_tabla_afi" class="table-responsive">
			<!-- <div class="col-md-12"> -->
				<table id="tabla_index" class="display" cellspacing="0" width="100%">
				<?php if ($rs->num_rows) { ?>
				<thead>
					<tr>
	                    <th>Cédula</th>
	                    <th>Nombre</th>
	                    <th>Teléfono</th>
                      <th>Género</th>
	                    <th>Email</th>
	                    <th>Dirección</th>
                      <th>Numero Afiliado</th>
                      <th style="width: 120px;"></th>
                	</tr>
				</thead>
				 <tfoot>
                  <tr>
                    <th>Cédula</th>
	                <th>Nombre</th>
	                <th>Primer Apellido</th>
	                <th>Segundo Apellido</th>
	                <th>Telefono</th>
	                <th>Correo</th>
	                <th>Direccion</th>
                   	<th style="width: 120px;"></th>
                  </tr>
                </tfoot>
                <tbody>
                	 <?php while ($row = mysqli_fetch_array($rs)):?>
                        <tr>
                		  <td><a href="?c=afiliado&m=ver&id=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td>
                          <td><?php echo $row['Nombre']; ?></td>
                          <td><?php echo $row[2]; ?></td>
                          <td><?php echo $row[3]; ?></td>
                          <td><?php echo $row['Email']; ?></td>
                          <td><?php echo $row[5]; ?></td>
                          <td><?php echo $row[7]; ?></td>
                          <td>
                            <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                              <span class="caret"></span>
                            </button>
                              <ul class="dropdown-menu">
                                <li>
                                    <a href="?c=afiliado&m=editar&id=<?php echo $row[0]; ?>">
                                    <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                </li>
                                <li>
                                  <a href="?c=afiliado&m=eliminar&id=<?php echo $row[0]; ?>">
                                   <span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                                </li>
                                 <li>
                                  <a href="?c=afiliado&m=ver&id=<?php echo $row[0]; ?>">
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
	</div>
<script  src="libs/js/jquery-1.12.4.js"></script>
<script  src="libs/js/jquery.dataTables.min.js"></script>
<script  src="libs/js/bootstrap.min.js"></script>
<script  src="libs/js/script.js"></script>
<script type="text/javascript">
  // function btn_regresar(){
  //  $('#div_loader').fadeOut('slow',function(){
  //     $('#div_loader').fadeIn('slow');
  //      $('#div_loader').load('?c=afiliado&m=index');
  //   });
   
  // }
  // function esconder(){
  //   $('#div_loader').fadeOut('slow',);
  //    $('#div_loader').fadeIn('slow');
  //   $('#div_loader').load('?c=afiliado&m=ver&id='+504080763);
  // }

  //  $('#example tbody tr td').on('click',function(){
  //   if(!($(this).index() == 8)){
  //     // alert("index8") 
  //   var currow = $(this).closest('tr');
  //   var ced = currow.find('td:eq(0)').text();
  //   $('#div_loader').fadeOut('slow',function(){
  //     $('#div_loader').fadeIn('slow');
  //      $('#div_loader').load('?c=afiliado&m=ver&id='+ced);
  //   });
  //   }
  // });
</script>
