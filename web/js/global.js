$(document).ready(function(){
	$(document).on("keyup"/*O click*/,/*nombre del campo o boton*/"#campoBuscar",function(){
		var valor = $(this/*O nombre del campo de texto|#campoBuscar|*/).val();

		$.ajax({
			url: "../../controller/departamento/filtro.php",
			data: "depto="+valor,
			type: "GET",
			success: function(datos){
				$("tbody").html(datos);
			}
		});
	});
});