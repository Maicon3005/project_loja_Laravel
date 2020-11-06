@extends('template.template')
@section('title','Criar Fornecedor')
@section('content')

	<body onLoad="tipoPessoa(1), mascaraDadosCadastrais()">

	<div class="title-page">
		<h1>Novo Fornecedor</h1>
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
				<label><input type="radio" onclick="tipoFornecedor(1)" name="tipo" value="pessoafisica" checked required>Pessoa Fisica</label>
				<label><input type="radio" onclick="tipoFornecedor(2)" name="tipo" value="pessoajuridica" required>Pessoa Jurídica</label>
			</div>
		</div>

		<div class="form-group col-md-6">
			<label for="nome">Nome</label>
			<input type="text" id="nome" name="nome" class="form-control">
		</div>

		<!-- formulário pessoa fisica -->
		
		<div class="form-group pessoa-fisica col-md-3">
			<label for="cpf">CPF</label>
			<input type="text" id="cpf" name="cpf" class="form-control pessoa-fisica">
		</div>

		<div class="form-group pessoa-fisica col-md-2">
			<label for="datanascimento">Data de Nascimento</label>
			<input type="text" id="datanascimento" name="datanascimento" class="form-control pessoa-fisica">
		</div>

		<!-- formulário pessoa juridica -->

		<div class="form-group pessoa-juridica  col-md-3">
			<label for="razaosocial">Razão Social</label>
			<input type="text" id="razaosocial" name="razaosocial" class="form-control pessoa-juridica">
		</div>

		<div class="form-group pessoa-juridica col-md-2">
			<label for="cnpj">CNPJ</label>
			<input type="text" id="cnpj" name="cnpj" class="form-control pessoa-juridica">
		</div>

		<!-- formulário de contato -->

		<div class="form-group col-md-5">
			<label for="email">E-mail</label>
			<input type="text" id="email" name="email" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label for="telefone">Telefone</label>
			<input type="text" id="telefone" name="telefone" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label for="celular">Celular</label>
			<input type="text" id="celular" name="celular" class="form-control">
		</div>

		<!-- formulário de endereço -->

		<div class="col-md-4">
			<label for="cep">CEP</label>
		</div>

		<div class="form-group col-md-12">
				<input type="text" id="cep" class="form-control search-cep" name="cep">
				<input type="button" onclick="endereco()" class="btn btn-secondary btn-cep" name="buscar" value="Buscar">
		</div>

		<div class="form-group col-md-3">
			<label for="uf">Estado</label>
				<select id="uf" name="estado" onclick="completarEndereco()" class="form-control">
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
			<input type="text" id="cidade" name="cidade" class="form-control">
		</div>

		<div class="form-group col-md-4">
			<label for="bairro">Bairro</label>
			<input type="text" id="bairro" name="bairro" class="form-control">
		</div>

		<div class="form-group col-md-6">
			<label for="logradouro">Logradouro</label>
			<input type="text" id="logradouro" name="logradouro" class="form-control">
		</div>

		<div class="form-group col-md-2">
			<label for="numero">Número</label>
			<input type="text" id="numero" name="numero" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label for="complemento">Complemento</label>
			<input type="text" id="complemento" name="complemento" class="form-control">
		</div>
</div>
		<nav class="btn-list">
				<a href="{{route('fornecedor.fornecedores')}}" class="btn btn-secondary">Voltar</a>
				<input type="submit" class="btn btn-dark" value="Criar Fornecedor">
		</nav>

	{!! Form::close() !!}
@endsection