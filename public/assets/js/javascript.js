/* função que adiciona máscara aos campos */

function mascaraDadosCadastrais(){
	$("#cpf").mask("000.000.000-00")
	$("#datanascimento").mask("00-00-0000")
	$("#cnpj").mask("000.000.000/0000-00")
	$("#telefone").mask("(00) 0000-0000")
	$("#celular").mask("(00) 0000-00009")
	$("#celular").blur(function(event){

	if($(this).val().length == 15){
		$("#celular").mask("(00) 00000-0009")
	}else{
		$("#celular").mask("(00) 0000-00009")
	}
	})
	$("#cep").mask("00000-000")
}

/* função para selecionar os tipos de pessoa (fisica/ juridica)*/
function tipoPessoa(opcao) {
	if(opcao == 'pessoafisica'){
		$(".pessoa-fisica").show();
		$(".pessoa-juridica").hide();
		$(".pessoa-juridica").val(null);
	}else if(opcao == 'pessoajuridica'){
		$(".pessoa-fisica").hide();
		$(".pessoa-juridica").show();
		$(".pessoa-fisica").val(null);
	}
}

/* função para buscar endereço endereço (AJAX) */

function endereco(){
	let inputCep = document.querySelector('input[name=cep]');
	let cep = inputCep.value.replace('-','');
	let url = 'http://viacep.com.br/ws/'+ cep +'/json';
	let xhr = new XMLHttpRequest();
	xhr.open('GET', url, true);
	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4){
			if(xhr.status == 200){
				preencherCampos(JSON.parse(xhr.responseText));
			}
		}
	}
	xhr.send();
}

/* função para preenchr campos de endereço */

function preencherCampos(endereco){
	document.querySelector('select[name=estado]').value = endereco.uf;
	document.querySelector('input[name=cidade]').value = endereco.localidade;
	document.querySelector('input[name=bairro]').value = endereco.bairro;
	document.querySelector('input[name=logradouro').value = endereco.logradouro;
	document.querySelector('input[name=complemento]').value = endereco.complemento;
}

/* função para alertar sobre a troca do tipo de fornecedor */

function alertar(opcao){
	let confere = confirm("Tem certeza que deseja mudar o tipo de Fornecedor?");
		if(confere == true){
			tipoFornecedor(opcao);
		}
}	