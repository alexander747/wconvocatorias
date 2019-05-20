$(function(){
	aparecercuantosfinancianproyecto();
	aparecercuantossemilleros();
});


function aparecercuantosfinancianproyecto(){
	$("#radio3").change(function(){
		$("#aparecer").css('display','block');
		otrasentidades();
	});
	$("#radio4").change(function(){
		$("#aparecer").css('display','none');
		$("#cuantasentidades").val("");
		$("#otrasentidades").html("");

	});
}

function otrasentidades(){
	$("#cuantasentidades").change(function(){
		console.log("cuantas");
		var cuantas = $("#cuantasentidades").val();
		var cad="";
		for (var i = 0; i < cuantas; i++) {
			cad+=`
					<div class="col-md-4">
					<div class="form-group">
					<label for="jobTitle2">Nombre de la entidad financiadora :</label>
					<input type="text" class="form-control" id="entidadfinanciadora${i}" name="entidadfinanciadora${i}">
					</div>
					</div>

					<div class="col-md-4">
					<div class="form-group">
					<label for="jobTitle2">Valor Financiado :</label>
					<input type="text" class="form-control" name="valorfinanciado${i}" id="valorfinanciado${i}">
					</div>
					</div>

					<div class="col-md-4">
					<div class="form-group">
					<label for="radioaporte">Tipo de Aporte :</label>
					<div>
					<input type="radio" class="check" id="radioaporte${i}" name="radioaporte${i}" data-radio="iradio_flat-red" value="Especie">
					<label for="flat-radio-1">Especie</label><br>
					<input type="radio" class="check" id="radioaporte${i+1}" name="radioaporte${i}" checked data-radio="iradio_flat-red" value="Efectivo">
					<label for="flat-radio-2">Efectivo</label>
					</div>
					</div>
					</div>
			`;
		} 	
		$("#otrasentidades").html(cad);

	});
}

function aparecercuantossemilleros(){
	$("#radiovincular1").change(function(){
		$("#aparecergrupos").css('display','block');
		incluirgrupos();
	});
	$("#radiovincular2").change(function(){
		$("#aparecergrupos").css('display','none');
		$("#cuantosgrupos").val("");
		$("#otrosgrupos").html("");

	});
}


function incluirgrupos(){
	$("#cuantosgrupos").change(function(){
		var cuantas = $("#cuantosgrupos").val();
		var cad="";
		for (var i = 0; i < cuantas; i++) {
			cad+=`
					<div class="col-md-4">
					<div class="form-group">
					<label for="nombresemillero${i}">Nombre del semillero :</label>
					<input type="text" class="form-control" id="nombresemillero${i}" name="nombresemillero${i}">
					</div>
					</div>

					<div class="col-md-4">
					<div class="form-group">
					<label for="programaacademico${i}">Facultad o programa academico :</label>
					<input type="text" class="form-control" name="programaacademico${i}" id="programaacademico${i}">
					</div>
					</div>

					<div class="col-md-4">
					<div class="form-group">
					<label for="radioaporte">Actividades a realizar por el semillero :</label>
					<div>
					<input type="text" class="form-control" id="actividadessemillero${i}" name="actividadessemillero${i}">
					</div>
					</div>
					</div>
			`;
		} 	
		$("#otrosgrupos").html(cad);

	});
}
















