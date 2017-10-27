	<style type="text/css">
	#divTabla {
		height: 100px;
		max-height: 150px;
		width: 100%;
		/*background-color: rgb(240,240,240);*/
		border-style: groove;
	}
	#divTabla_fia{
		background-color: rgb(240,240,240);
		height: 100px;
		max-height: 150px;
		width: 100%;
	}
	#fafiliado_sol{
		width: 100%;
	}
	.scrollit {
		overflow:auto;
		height:100px;
		width: 100%;
	}
</style>
<div class="container">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Agregar</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">

					<div id="buscar_afi" class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Buscar</span>
							<input type="text" name="busqueda_text" id="busqueda_text" placeholder="Iniciar busqueda" class="form_control" onkeyup="showResult(this.value)" >
						</div>
					</div>
					<div id="divTabla">
						<div class="table-responsive">
							<div class="scrollit">
								<table id="table_afi"  class="table">
									<thead>
										<tr>
											<th>Cedula</th>
											<th>Nombre</th>
											<th>N Afiliado</th>
										</tr>
									</thead>
									<tbody id="result_afi">
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<form class="form-horizontal" action="?c=solicitud&m=agregar" method="POST">
						<br>
						<!-- <input  value="<?php echo $afi["Cedula"]; ?>" type="text" class="form_control"  > -->
						<hr />
						<div class="form-group">

							<label for="ced_afi" class="control-label"></label>
							<div class="col-xs-3">
								<input placeholder="Cedula de Afiliado" value="<?php echo $afi["Cedula"]; ?>" type="text" id="ced_afi"  class="form_control"  readonly>
							</div>
							<label for="nom_afi" class="control-label col-xs-1"></label>
							<div class="col-xs-3">
								<input placeholder="Nombre Afiliado" value="<?php echo $afi["Nombre"]; ?>" type="text" id="nom_afi" class="form_control"  readonly>
							</div>
							<label for="naf_in" class="control-label col-xs-1"></label>
							<div class="col-xs-3" >
								<input placeholder="Numero de Afiliado" value="<?php echo $afi["Numero_Afiliado"]; ?>" type="text" name="naf_in" id="naf_in"  class="form_control"  readonly>
							</div>
						</div>
						<hr />
						<div class="form-group">
							<label for="nso_in" class="control-label ">Numero de Solicitud</label>
							<!-- <div class="col-xs-9" > -->
								<input id="nso_in" class="form-control" name="nso_in" type="number" required>
								<!-- </div> -->
							</div>

							<!-- <div class="col-md-1"></div> -->
							<div class="form-group">
								<label for="idi_in" class="control-label">Inversion</label>
								<select id="idi_in" class="form-control" name="idi_in">
									<?php while ($row = mysqli_fetch_array($inversion)) { ?>
									<option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="inputEmail" class="control-label">Garantia</label>
								<!--  -->
								<select class="form-control" id="cga_in" name="cga_in" onblur="validarGarantia()">
									<?php while ($row = mysqli_fetch_array($garantia)){ ?>
									<option value="<?php echo $row[0] ?>"><?php echo $row['GARANTIA']?></option>
									<?php } ?>
								</select>
							</div>
							<div id="divFia" class="form-group">
								<label for="idi_in" class="control-label">Fiador</label>
							<input class="form-control" id="idf_in" name="idf_in" type="number">
							</div>
							<div class="form-group">
								<label for="mca_fl" class="control-label">Monto Capital</label>
								<input class="form-control" id="mca_fl" name="mca_fl" type="number" step="any" min="0" required>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success">Registrar</button>
								<a href="?c=solicitud" class="btn btn-warning" role="button">Regresar</a>
							</div>
						</form>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
	</div>
<div class=" modal fade" id="afiliado_sol" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding:10px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><!-- <span class="glyphicon glyphicon-lock"> </span>--> Busqueda de Fiador</h4>
      </div>
      <div class="modal-body" style="padding:10px 50px;">
      	<div id="buscar_fia" class="form-group">
      		<div class="input-group">
      			<span class="input-group-addon">Buscar</span>
      			<input type="text" name="busqueda_text_fia" id="busqueda_text_fia" placeholder="Iniciar busqueda" class="form_control" onkeyup="buscarFia(this.value)" >
      		</div>
      	</div>
      	<div id="divTabla_fia">
      		<div class="table-responsive">
      			<div class="scrollit">
      				<table id="table_fia" class="table table bordered">
      					<thead>
      						<tr>
      							<th>Cedula</th>
      							<th>Nombre</th>
      							<th>N Afiliado</th>
      						</tr>
      					</thead>
      					<tbody id="result_fia">
      					</tbody>
      				</table>
      			</div>
      		</div>
      	</div>
        <form class="form-horizontal" id="fafiliado_sol" role="form" action="#" method="POST">
          <hr />
          <div class="form-group">
          	<div class="form-group">
          		<label for="ced_fia" class="control-label">Cedula</label>
          		<input class="form-control" id="ced_fia" type="text" readonly>
          	</div>
          	<div class="form-group">
          		<label for="nom_fia" class="control-label">Nombre</label>
          		<input class="form-control" id="nom_fia" type="text" readonly>
          	</div>
          	<div class="form-group">
          		<label for="idf_fia" class="control-label">N Fiador</label>
          		<input class="form-control" id="idf_fia" name="idf_fia" type="text" readonly>
          	</div>
          <button id="btn_agr_Fia" onclick="agregarFia()" type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>agregar este fiador para que pague por puto</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>

	<script src="libs/js/jquery-1.12.4.js"></script>
	<script src="libs/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$('#btnModal').click(function(){
		$('#afiliado_sol').modal();
	});
</script>
<script type="text/javascript">
	function agregarFia(){
		var idf = $('#idf_fia').val();
		$('#idf_in').val(idf);
		$('#busqueda_text_fia').val('');
		$('#table_fia').hide();
		$('#afiliado_sol').modal("hide");

	}
	function buscarFia(str){
		if (str.length==0) {
			$('#result_fia').html("<tr></tr>");
			$('#table_fia').hide();
    		return;
	}
	if (str !='') {
	$('#result_fia').html('');
	$.ajax({
		url:"?c=solicitud&m=obtenerFiador",
		method:"get",
		data:{buscar:str},
		dataType:"text",
		success: function(data){
			$('#table_fia').show();
			$('#result_fia').html(data);
		}
		});
  	}
	}
	function showResult(str){
		if (str.length==0) {
			$('#result_afi').html("<tr></tr>");
			$('#table_afi').hide();
    		return;
	}
	if (str !='') {
	$('#result_afi').html('');
	$.ajax({
		url:"?c=solicitud&m=obtenerAfiliado",
		method:"get",
		data:{buscar:str},
		dataType:"text",
		success: function(data){
			$('#table_afi').show();
			$('#result_afi').html(data);
		}
		});
  	}
	}
	// https://stackoverflow.com/questions/10213620/how-to-check-if-an-option-is-selected
	function validarGarantia(){
		var selected = $('#cga_in option').filter(':selected').text();
		 if(selected==="Fidosiaria"){
		 	$('#divFia').show();
		 	$('#afiliado_sol').modal();
		 }
	}
</script>
<script type="text/javascript">
	$('#table_afi tbody').on('click','tr',function(){
		var currow = $(this).closest('tr');
		var ced = currow.find('td:eq(0)').text();
		var nom = currow.find('td:eq(1)').text();
		var naf = currow.find('td:eq(2)').text();
		//alert(ced+'\n'+nom);
		$('#nom_afi').val(nom);
		$('#ced_afi').val(ced);
		$('#naf_in').val(naf);
	});
	$('#table_fia tbody').on('click','tr',function(){
		var currow = $(this).closest('tr');
		var ced = currow.find('td:eq(0)').text();
		var nom = currow.find('td:eq(1)').text();
		var cfi = currow.find('td:eq(2)').text();
		//alert(ced+'\n'+nom);
		$('#nom_fia').val(nom);
		$('#ced_fia').val(ced);
		$('#idf_fia').val(cfi);
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var str = $('#busqueda_text').val();
		if(str.length==""){
			$('#table_afi').hide();
		}else{$('#table_afi').show();}
		var str_fia = $('#busqueda_text_fia').val();
		if(str_fia.length==""){
			$('#table_fia').hide();
		}else{$('#table_fia').show();}
		$('#divFia').hide();
	});
</script>