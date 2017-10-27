$(document).ready(function(){
			$('#tabla_index').DataTable({
          "order": [[0, "asc"]],
          "language":{
          "lengthMenu": "Mostrar _MENU_ registros",
          "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "search": "Buscar:",
            "paginate": {
              "next":       "Siguiente",
              "previous":   "Anterior"
            },          
          }
        })
			});
