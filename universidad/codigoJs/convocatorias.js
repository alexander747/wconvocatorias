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
			var html = "";
			var arreglo = ["bg-success","bg-info","bg-warning","bg-primary"];
			var j = 0;
			for (var i in datos.data) {
				if(datos.data[i].tipc_estado==1){
					html+=`<div class="col-md-6">
					<div class="card text-white ${arreglo[j]}">
					<div class="card-header">
					<h4 class="m-b-0 text-white">${datos.data[i].tipc_nombre}</h4></div>
					<div class="card-body">
					<h3 class="card-title">${datos.data[i].tipc_nombre}</h3>
					<p class="card-text">${datos.data[i].tipc_descripcion}</p>
					<a href="${datos.data[i].tipc_url}?id=${datos.data[i].tipc_id}" class="btn btn-dark">Registrarse</a>
					</div>
					</div>
					</div>`;
					j++;
					if(j==4){
						j=0;
					}
				}
			}

			$("#convocatorias").html(html);
		}
	});
}