/*======================================
=            EDITAR CLIENTE            =
======================================*/

$(".btnEditarCliente").click(function(){

	var idCliente = $(this).attr("idCliente");

	var datos = new FormData();
	datos.append("idCliente", idCliente);

	$.ajax({

		url:"ajax/clientes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType:"json",
		success:function(respuesta){

			console.log("respuesta", respuesta);

		}

	});


});

/*=====  End of EDITAR CLIENTE  ======*/
