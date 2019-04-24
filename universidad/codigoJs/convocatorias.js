$(function(){
	listarconvocatorias();
});

var listarconvocatorias = function(){
	$.ajax({
		method:"POST",
		url:"registros/registro_convocatorias.php",
		data:{"accion":1},
		cache:false,
		contentType:false,
		processData:false,
		success:function(respuesta){
			var datos = JSON.parse(respuesta);
			for (var i in datos.data) {
				console.log(datos.data[i]);
			}
		}
	});
}