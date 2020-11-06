@extends('template.template')

@section('title','Detalhes de '.$fornecedor->nome)
@section('content')

<div class="title-page">
	<h1>Detalhes de {{$fornecedor->nome}}</h1>
</div>


<h2 class="subtitle-data">Dados</h2>
	<table class="table table-striped table-bordered table-hover table-data">
			<tr>
				<td class="col-md-2"><strong>Nome</strong></td>
				<td class="col-md-7">{{$fornecedor->nome}}</td>
			</tr>
			<tr>
				<td class="col-md-2"><strong>CPF</strong></td>
				<td class="col-md-7">{{$fornecedorfisico->cpf}}</td>
			</tr>
			<tr>
				<td class="col-md-2"><strong>Data de Nascimento</strong></td>
				<td class="col-md-7">{{$fornecedorfisico->datanascimento}}</td>
			</tr>
	</table>

	<h2 class="subtitle-data">Contato</h2>
	<table class="table table-striped table-bordered table-hover table-data">
			<tr>
				<td class="col-md-2"><strong>E-mail</strong></td>
				<td class="col-md-7">{{$fornecedor->email}}</td>
			</tr>
			<tr>
				<td class="col-md-2"><strong>Telefone</strong></td>
				<td class="col-md-7">{{$fornecedor->telefone}}</td>
			</tr>
			<tr>
				<td class="col-md-2"><strong>Celular</strong></td>
				<td class="col-md-7">{{$fornecedor->celular}}</td>
			</tr>
	</table>

	<h2 class="subtitle-data">Endereço</h2>
	<table class="table table-striped table-bordered table-hover table-data">
			<tr>
				<td class="col-md-2"><strong>CEP</strong></td>
				<td class="col-md-7">{{$endereco->cep}}</td>
			</tr>
			<tr>
				<td class="col-md-2"><strong>Estado</strong></td>
				<td class="col-md-7">{{$endereco->estado}}</td>
			</tr>
			<tr>
				<td class="col-md-2"><strong>Cidade</strong></td>
				<td class="col-md-7">{{$endereco->cidade}}</td>
			</tr>
			<tr>
				<td class="col-md-2"><strong>Bairro</strong></td>
				<td class="col-md-7">{{$endereco->bairro}}</td>
			</tr>
			<tr>
				<td class="col-md-2"><strong>Logradouro</strong></td>
				<td class="col-md-7">{{$endereco->logradouro}}</td>
			</tr>
			<tr>
				<td class="col-md-2"><strong>Número</strong></td>
				<td class="col-md-7">{{$endereco->numero}}</td>
			</tr>
			<tr>
				<td class="col-md-2"><strong>Complemento</strong></td>
				<td class="col-md-7">{{$endereco->complemento}}</td>
			</tr>
	</table>

	<nav class="btn-list">
			<a href="{{route('fornecedor.fornecedores')}}" class="btn btn-secondary">Voltar</a>
			<a href="{{route('fornecedor.edit', $fornecedor->id)}}" class="btn btn-dark">Alterar</a>
			<input type="button" value="Excluir" onclick="alertar()"class="btn btn-danger">
	</nav>
	<br>

	<script type="text/javascript">
		function alertar(){
			let confere = confirm("Tem certeza que deseja excluir o Fornecedor?");
			if(confere == true){
				
			}
		}
	</script>

@endsection