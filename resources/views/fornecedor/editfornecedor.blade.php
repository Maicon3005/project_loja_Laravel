@extends('template.template')
@section('title','Editar Fornecedor - '.$fornecedor->nome)
@section('content')

	<body onLoad="tipoPessoa('{{$fornecedor->tipo}}')">

	<div class="title-page">
		<h1>Editar Fornecedor</h1>
	</div>

	<!-- if para mostrar os erros no preenchimento do formulário -->

	@if($errors->any())
		<ul class="alert alert-warning">
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>
	@endif

<div class="form">
	{!! Form::open(['route'=>'fornecedor.store']) !!}

	<!-- radio button para selecionar tipo de fornecedor -->


		<div class="form-group col-md-12">
			<div  style="margin-left:40%;">
				<label><input type="radio" onclick="alertar('pessoafisica')" name="tipo" value="pessoafisica" checked required>Pessoa Fisica</label>
				<label><input type="radio" onclick="alertar('pessoajuridica')" name="tipo" value="pessoajuridica" required>Pessoa Jurídica</label>
			</div>
		</div>

		<div class="form-group col-md-6">
			<label for="nome">Nome</label>
			<input type="text" id="nome" name="nome" value="{{$fornecedor->nome}}"class="form-control">
		</div>

		<!-- formulário pessoa fisica -->
	
	@if($fornecedor->tipo == 'pessoafisica')
		<div class="form-group pessoa-fisica col-md-3">
			<label for="cpf">CPF</label>
			<input type="text" id="cpf" name="cpf" value="{{$pessoafisica->cpf}}" class="form-control pessoa-fisica">
		</div>

		<div class="form-group pessoa-fisica col-md-2">
			<label for="datanascimento">Data de Nascimento</label>
			<input type="text" id="datanascimento" name="datanascimento" value="{{$pessoafisica->datanascimento}}" class="form-control pessoa-fisica">
		</div>
	@else($fornecedor->tipo == 'pessoajuridica')

		<!-- formulário pessoa juridica -->

		<div class="form-group pessoa-juridica  col-md-3">
			<label for="razaosocial">Razão Social</label>
			<input type="text" id="razaosocial" name="razaosocial" class="form-control pessoa-juridica">
		</div>

		<div class="form-group pessoa-juridica col-md-2">
			<label for="cnpj">CNPJ</label>
			<input type="text" id="cnpj" name="cnpj" class="form-control pessoa-juridica">
		</div>
	@endif

		<!-- formulário de contato -->

		<div class="form-group col-md-5">
			<label for="email">E-mail</label>
			<input type="text" id="email" name="email" value="{{$fornecedor->email}}" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label for="telefone">Telefone</label>
			<input type="text" id="telefone" name="telefone" value="{{$fornecedor->telefone}}" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label for="celular">Celular</label>
			<input type="text" id="celular" name="celular" value="{{$fornecedor->celular}}" class="form-control">
		</div>

		<!-- formulário de endereço -->

		<div class="form-group col-md-12">
			<div class="col-md-4">
				<label for="cep">CEP</label>
				<input type="text" id="cep"  value="{{$endereco->cep}}" class="form-control" name="cep">
			</div>
		</div>

		<div class="form-group col-md-3">
			<label for="uf">Estado</label>
				<select id="uf" name="estado" class="form-control estados">
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				</select>
		</div>

		<div class="form-group col-md-4">
			<label for="cidade">Cidade</label>
			<input type="text" id="cidade" name="cidade" value="{{$endereco->cidade}}" class="form-control">
		</div>

		<div class="form-group col-md-4">
			<label for="bairro">Bairro</label>
			<input type="text" id="bairro" name="bairro" value="{{$endereco->bairro}}" class="form-control">
		</div>

		<div class="form-group col-md-6">
			<label for="logradouro">Logradouro</label>
			<input type="text" id="logradouro" name="logradouro" value="{{$endereco->logradouro}}" class="form-control">
		</div>

		<div class="form-group col-md-2">
			<label for="numero">Número</label>
			<input type="text" id="numero" name="numero" value="{{$endereco->numero}}" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label for="complemento">Complemento</label>
			<input type="text" id="complemento" name="complemento" value="{{$endereco->complemento}}" class="form-control">
		</div>
</div> 
		<nav class="btn-list">
				<a href="{{route('fornecedor.fornecedores')}}" class="btn btn-secondary">Voltar</a>
				<input type="submit" value="Alterar Fornecedor" class="btn btn-dark">
		</nav>
 {!! Form::close() !!} 

 		<script type="text/javascript"> $("#cep").focusout(function(){$.ajax({url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/', dataType: 'json', success: function(resposta){$("#logradouro").val(resposta.logradouro); $("#complemento").val(resposta.complemento); $("#bairro").val(resposta.bairro); $("#cidade").val(resposta.localidade); $("#uf").val(resposta.uf);
					$("#numero").focus();
				}
			});
		});
	</script>
@endsection