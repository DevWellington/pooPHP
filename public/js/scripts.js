function chargeData(){
	
	var	fileJSON = 'json/clientes.json.php';
	var orderBy = $("#orderBy").val();

	// Carrega a lista de clientes
	$.getJSON(fileJSON, {
		type: 'listaClientes',
		orderBy: orderBy
	}, function(data) {
		
		$('#listaClientes *').remove();

		// mesmo o JSON vindo com a ordem correta (DESC) no HTTP, o $.each desfaz a ordem.
		if (orderBy === 'desc'){
			for (i = Object.keys(data).length; i > 0; i--)
				$('#listaClientes').append('<a id="'+i+'" href="#"><p>'+data[i]+'</p></a>');

		} else {	
			$.each(data, function(index, el) {
				$('#listaClientes').append('<a id="'+index+'" href="#"><p>'+el+'</p></a>');
			});

		}
	}).error(function() { 
		console.log("error"); 

	}).complete(function() { 
		
		// Carrega os registros completos do cliente
		$("#listaClientes a").click(function(){
			id = $(this).attr('id');

			$.getJSON(fileJSON, {
				type: 'id',
				id: id
			}, function(data) {

				$("#cpf").parent().parent().parent().css('display', '');

				if (data.tipoCliente === "Pessoa Juridica"){
					$("#cpf").parent().css('display', 'none');
					$("#cnpj").text(data.cnpj).parent().css('display', 'list-item');
				} else{
					$("#cnpj").parent().css('display', 'none');
					$("#cpf").text(data.cpf).parent().css('display', 'list-item');
				}
				$("#nomeCliente").text(data.nome);
				$("#tipoCliente").text(data.tipoCliente);
				$("#endereco").text(data.endereco);
				$("#enderecoCobranca").text(data.enderecoCobranca);
				$("#telefone").text(data.telefone);
				$("#starts").text(data.starts + " Estrelas");

			}).error(function() { 
				console.log("error"); 
			});
		});

		// Clica no primeiro registro para que os campos nao fiquem vazios
		$("#listaClientes a:eq(0)").click();

	});			
}

$(document).ready(function() {
	// hide all elements
	$("#cpf").parent().parent().parent().css('display', 'none');

	// Carga inicial
	chargeData();

	// recarrega a lista de clientes quando altera a ordem
	$("select#orderBy").change(function(){
		chargeData();
	});
});