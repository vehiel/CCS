	<div class="container">
		<h2>Usuarios</h2>
		<a href="?c=usuario&m=agregar" class="btn btn-default" role="button">Agregar Usuario</a>
    <button id="btn" onclick="esconder()">ver</button>
		<div id="div_tabla_usu" class="table-responsive">
			<!-- <div class="col-md-12"> -->
				<table id="tabla_index" class="display" cellspacing="0" width="100%">
          <?php if ($rs->num_rows) { ?>
          <thead>
           <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Genero</th>
            <th>Email</th>
            <th>Direccion</th>
            <!-- <th>Fecha de Nacimiento</th> -->
            <th>Codigo Usuario</th>
            <!-- <th>Contrasenna</th> -->
            <th>Codigo de Rol</th>
            <th style="width: 120px;"></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Genero</th>
            <th>Email</th>
            <th>Direccion</th>
            <!-- <th>Fecha de Nacimiento</th> -->
            <th>Codigo Usuario</th>
            <!-- <th>Contrasenna</th> -->
            <th>Codigo de Rol</th>
            <th style="width: 120px;"></th>
          </tr>
        </tfoot>
        <tbody>
          <?php while ($row = mysqli_fetch_array($rs)):?>
            <tr>
              <td><a href="?c=usuario&m=ver&id=<?php echo $row[0]; ?>"><?php echo $row[0];?></a></td>
              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[2]; ?></td>
              <td><?php echo $row[3]; ?></td>
              <td><?php echo $row[4]; ?></td>
              <td><?php echo $row[5]; ?></td>
              <!-- <td><?php echo $row[6]; ?></td> -->
              <td><?php echo $row[7]; ?></td>
              <td><?php echo $row[8]; ?></td>
              <!-- <td><?php echo $row[9]; ?></td> -->
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
      <!-- </div> -->
    </div>
    <div id="div_loader" ></div>
<div class="modal fade" id="modal_ver_usu" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding:10px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Visualisazion de Usuario</h4>
      </div>
      <div class="modal-body" style="padding:10px 50px;">
        
        <div id="div_tabla_ver">
          <div class="table-responsive">
            <!-- <div class="scrollit"> -->
              <table id="table_ver_usu" class="table table bordered">
                  
                <!-- <tbody id="result_fia">
                </tbody> -->
              </table>
            <!-- </div> -->
          </div>
        </div>
        <button id="btn_salir_ver" onclick="salirVerModal()" type="button" class="btn btn-success "><span class="glyphicon glyphicon-off"></span>Regresar</button>
       <!--  <button id="btn_editar_ver" onclick="editarUsuario()" type="button" class="btn btn-default "><span class="glyphicon glyphicon-pencil"></span>Editar</button> -->
      </div>
    </div>
  </div>
</div>
  </div>
  <script  src="libs/js/jquery-1.12.4.js"></script>
  <script  src="libs/js/jquery.dataTables.min.js"></script>
  <script  src="libs/js/bootstrap.min.js"></script>
  <script  src="libs/js/script.js"></script>
<script type="text/javascript">
  function salirVerModal(){
    $('#modal_ver_usu').modal("hide");
  }
  function editarUsuario(){
    var ced = $('#table_ver_usu tr #td_ced').text();
    //alert("editar"+currow);
    window.location.href = '?c=usuario&m=editar&id='+ced;
  }
  function eliminarUsuario(){
    var ced = $('#table_ver_usu tr #td_ced').text();
    window.location.href = '?c=usuario&m=eliminar&id='+ced;
  }
  function esconder(){
    $('#div_tabla_usu').fadeOut('slow');
    $('#div_loader').load('?c=usuario&m=ver&id='+504080764)
  }

  $('#example tbody tr td').on('click',function(){
    if(!($(this).index() == 8)){
      // alert("index8") 
    var currow = $(this).closest('tr');
    var ced = currow.find('td:eq(0)').text();
    alert('click en la tabla');
    // $.ajax({
    // url:"?c=usuario&m=ver",
    // method:"get",
    // data:{id:ced},
    // dataType:"text",
    // success: function(data){
    //   $('#table_ver_usu').html(data);
    // }
    // });
    // $('#modal_ver_usu').modal();
    }
    
   
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
// $('#tablaPerro').DataTable({
//           "order": [[0, "asc"]],
//           "language":{
//           "lengthMenu": "Mostrar _MENU_ registros",
//           "info": "Mostrando pagina _PAGE_ de _PAGES_",
//             "search": "Buscar:",
//             "paginate": {
//               "next":       "Siguiente",
//               "previous":   "Anterior"
//             },          
//           }
//         }); 
});
</script>