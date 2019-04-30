$(function(){
	iniciarsesion();
});


function iniciarsesion (){
	$("#loginform").on("submit",function(e){
		e.preventDefault();
		var datos = new FormData($("#loginform")[0]);
		$.ajax({
			method:"POST",
			url:"registros/sesion.php",
			data:datos,
			contentType:false,
			cache:false,
			processData:false,
			success:function(respuesta){
				console.log(respuesta);
				if (respuesta=='done') {
					location.href='convocatorias.php';
				}else if(respuesta=='bad'){
					$.toast({
						heading: 'Convocatorias',
						text: 'Credenciales Incorrectas',
						position: 'top-right',
						loaderBg:'#ff6849',
						icon: 'danger',
						hideAfter: 3500,
						stack: 3500
					});
				}
			}
		});
	});
}
















