$(document).ready(function(){
	$(document).on("keyup","#camp_buscar",function(){
		var valor = $(this).val();

		$.ajax({
			url: "../../controller/ciudad/filtro.php",
			data: "ciudad="+valor,
			type: "GET",
			success: function(datos){
				$("tbody").html(datos);
			}
		});
	});
	$(document).on("keyup",".validar",function(){
		var cadena = $(this).val();
		var cont = 0;
		var noValidos = '|!"#$%&/()=?¡¿_;:¨*{}^[]´+-.,/';

		for (var i = 0; i < cadena.length; i++) {
			for (var y = 0; y < noValidos.length; y++) {
				if (cadena[i] == noValidos[y]) {
					cont++;
				}
			}
		}
		if (cont>0) {
			$(this).val(cadena.substr(0,cadena.length-1));
		}
	});
});