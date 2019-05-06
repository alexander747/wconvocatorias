 $(document).ready(function(){
 	listar(1);
 	guardar();
 	actualizar();
 	borrar();
 });

 var listar = function(accion){
 	var table = $('#datatableTusuario').DataTable({
 		destroy:true,
 		dom: 'Blfrtip',
 		buttons: [
 		'copy', 'csv', 'excel', 'pdf', 'print'
 		],
 		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
 		"ajax":{
 			"method":"POST",
 			"url":"registros/registro_Tusuario.php",
 			"data": {"accion":accion}
 		},
 		"columns":[
 		{"data":"tipu_id"},
 		{"data":"tipu_nombre"},
 		{"defaultContent":"<button type='button' class='EditarTusuario btn btn-success btn-circle' data-toggle='modal' data-target='#myModal2' data-toggle='tooltip' data-placement='top' data-original-title='Ver'><i class='ti-reload'></i> </button><button type='button' class='borrar btn btn-danger btn-circle' data-toggle='modal' data-target='#myModal3' data-toggle='tooltip' data-placement='top' data-original-title='Ver'><i class='ti-trash'></i> </button>"
 	}
 	]
 });
 	$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

 	dataeditar("#datatableTusuario tbody",table);
 	databorrar("#datatableTusuario tbody",table);
 }

 var databorrar = function(body,table){
 	$(body).on("click","button.borrar",function(){
 		var data = table.row($(this).parents("tr")).data();
 		$("#idborrar").val(data.tipu_id);
 	});
 }

 var borrar = function(){
 	$("#frmDatos3").on("submit",function(e){
 		e.preventDefault();
 		var data = new FormData($("#frmDatos3")[0]);
 		$.ajax({
 			method:"POST",
 			url:"registros/registro_Tusuario.php",
 			data:data,
          contentType: false, //importante enviar este parametro en false
          processData: false,
          cache:false,
          success:function(respuesta){
          	var resp = JSON.parse(respuesta);
          	mostrar_mensaje(resp);
          	listar(1);
          	setTimeout(function(){location.reload();},3000);
          }
      });
 	});
 }


 var dataeditar = function(body,table){
 	$(body).on("click","button.EditarTusuario",function(){
 		var data = table.row($(this).parents("tr")).data();
 		console.log(data);
 		$("#id").val(data.tipu_id);
 		$("#nombreTusuario2").val(data.tipu_nombre);

 	});
 }

 var actualizar = function(){
 	$("#frmDatos2").on("submit",function(e){
 		e.preventDefault();
 		var datos = new FormData($("#frmDatos2")[0]);
 		$.ajax({
 			method:"POST",
 			url:"registros/registro_Tusuario.php",
 			data:datos,
          contentType: false, //importante enviar este parametro en false
          processData: false,
          cache:false,
          success:function(respuesta){
          	var resp = JSON.parse(respuesta);
          	mostrar_mensaje(resp);
          	listar(1);
          	setTimeout(function(){location.reload();},3000);
          }
      });
 	});
 }


 var guardar = function(){
 	$("#frmDatos").on("submit",function(e){
 		e.preventDefault();
 		var parametros = new FormData($("#frmDatos")[0]);
 		$.ajax({
 			method:"POST",
 			url:"registros/registro_Tusuario.php",
 			data:parametros,
          contentType: false, //importante enviar este parametro en false
          processData: false,
          cache:false
      }).done(function(info){
      	var json_info = JSON.parse(info);
      	mostrar_mensaje(json_info);
      	listar(1);
      	setTimeout(function(){location.reload();}, 3000);
      });
  });
 }



 var mostrar_mensaje = function(informacion){
 	if(informacion.respuesta == 'BIEN'){
 		$.toast({
 			heading: 'QMS Calidad',
 			text: 'Los cambios se realizaron satisfactoriamente.',
 			position: 'top-right',
 			loaderBg:'#ff6849',
 			icon: 'success',
 			hideAfter: 3500,
 			stack: 6
 		});

 	}else if(informacion.respuesta == 'ERROR'){
 		$.toast({
 			heading: 'QMS Calidad',
 			text: 'No se realizaron cambios.',
 			position: 'top-right',
 			loaderBg:'#ff6849',
 			icon: 'error',
 			hideAfter: 3500
 		});

 	}else if(informacion.respuesta == 'EXISTE'){
 		$.toast({
 			heading: 'QMS Calidad',
 			text: 'El registro ya existe en el sistema.',
 			position: 'top-right',
 			loaderBg:'#ff6849',
 			icon: 'warning',
 			hideAfter: 3500,
 			stack: 6
 		});
 	}
 }
