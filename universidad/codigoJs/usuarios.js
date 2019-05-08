 $(document).ready(function(){
 	listar(1);
  listartipousuario();
  listarprogramas();
  listardepartamentonacimiento();
  listarciudadnacimiento();
  listardepartamenresidencia();
  listarciudadresidencia();
  guardar();
 });

 var listar = function(accion){
 	var table = $('#datatableUsuario').DataTable({
 		destroy:true,
 		dom: 'Blfrtip',
 		buttons: [
 		'copy', 'csv', 'excel', 'pdf', 'print'
 		],
 		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
 		"ajax":{
 			"method":"POST",
 			"url":"registros/registro_usuario.php",
 			"data": {"accion":accion}
 		},
 		"columns":[
 		{"data":"usu_nombres"},
 		{"data":"usu_apellidos"},
   {"data":"usu_correo"},
   {"data":"tipu_nombre"},

   {"defaultContent":"<button type='button' class='EditarUsuario btn btn-success btn-circle' data-toggle='modal' data-target='#myModal2' data-toggle='tooltip' data-placement='top' data-original-title='Ver'><i class='ti-reload'></i>   </button><button type='button' class='borrar btn btn-danger btn-circle' data-toggle='modal' data-target='#myModal3' data-toggle='tooltip' data-placement='top' data-original-title='Ver'><i class='ti-trash'></i> </button>"
  }
  ]
 });
 	$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

 	dataeditar("#datatableUsuario tbody",table);
 	// databorrar("#datatableUsuario tbody",table);
 }

 var dataeditar = function(body,table){
  $(body).on("click","button.EditarUsuario",function(){
   var data = table.row($(this).parents("tr")).data();
   console.log(data);
   $("#actnombreUsuario").val(data.usu_nombres);
   $("#actapellidosUsuario").val(data.usu_apellidos);
   $("#actidentificacionUsuario").val(data.usu_nombres);
   //tipo de identificacion
   //departamento de nacimiento
   //ciudad de nacimiento
   //departamento de residencia
   //ciudad de residencia

   $("#actfechaNacimiento").val(data.usu_fecha_nacimiento);
   $("#actdireccion").val(data.usu_direccion);
   $("#actbarrio").val(data.usu_barrio);
   $("#acttelefono").val(data.usu_telefono);
   $("#actnombreUsuario").val(data.usu_nombres);
  });
 }

 function listarprogramas(){
  $.ajax({
   method:"POST",
   url:"registros/registro_usuario.php",
   data:{"accion":6},
   success:function(respuesta){
    $("#programas").html(respuesta);
   }
  });
 }

 function listartipousuario(){
  $.ajax({
   method:"POST",
   url:"registros/registro_usuario.php",
   data:{"accion":7},
   success:function(respuesta){
    $("#tipousuario").html(respuesta);
   }
  });
 }

 function listardepartamentonacimiento(){
  $.ajax({
   method:"POST",
   url:"registros/registro_usuario.php",
   data:{"accion":8},
   success:function(respuesta){
    $("#deptonacimiento").html(respuesta);
    var id = $("#deptonacimiento").val();
    $.ajax({
     method:"POST",
     url:"registros/registro_usuario.php",
     data:{"accion":9,"idDepto":id},
     success:function(respuesta){
      $("#ciudadNacimiento").html(respuesta);
     }
    });
   }
  });
 }

 function listarciudadnacimiento(){
  $("#frmDatos #deptonacimiento").change(function(){
   var id = $("#deptonacimiento").val();
   $.ajax({
    method:"POST",
    url:"registros/registro_usuario.php",
    data:{"accion":9,"idDepto":id},
    success:function(respuesta){
     $("#ciudadNacimiento").html(respuesta);
    }
   });
  });
 }

 function listardepartamenresidencia(){
  $.ajax({
   method:"POST",
   url:"registros/registro_usuario.php",
   data:{"accion":8},
   success:function(respuesta){
    $("#deptoresidencia").html(respuesta);
    var id = $("#deptoresidencia").val();
    $.ajax({
     method:"POST",
     url:"registros/registro_usuario.php",
     data:{"accion":9,"idDepto":id},
     success:function(respuesta){
      $("#ciudadResidencia").html(respuesta);
     }
    });
   }
  });
 }

 function listarciudadresidencia(){
  $("#frmDatos #deptoresidencia").change(function(){
   var id = $("#deptoresidencia").val();
   $.ajax({
    method:"POST",
    url:"registros/registro_usuario.php",
    data:{"accion":9,"idDepto":id},
    success:function(respuesta){
     $("#ciudadResidencia").html(respuesta);
    }
   });
  });
 }


 var databorrar = function(body,table){
 	$(body).on("click","button.borrar",function(){
 		var data = table.row($(this).parents("tr")).data();
 		$("#idborrar").val(data.usu_id);
 	});
 }

 var borrar = function(){
 	$("#frmDatos3").on("submit",function(e){
 		e.preventDefault();
 		var data = new FormData($("#frmDatos3")[0]);
 		$.ajax({
 			method:"POST",
 			url:"registros/registro_usuario.php",
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





 var guardar = function(){
 	$("#frmDatos").on("submit",function(e){
 		e.preventDefault();
 		var parametros = new FormData($("#frmDatos")[0]);
 		$.ajax({
 			method:"POST",
 			url:"registros/registro_usuario.php",
 			data:parametros,
    contentType: false,
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
