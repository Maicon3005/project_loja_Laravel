@extends('template.template')
@section('title','Fornecedores')

@section('content')

@section('form-search')
	<form class="form-inline my-2 my-lg-0 input-search">
     	<input type="text" name="busca" placeholder="Digite o nome do fornecedor ...">
     	<input type="submit" value="Buscar" name="">
    </form>
@endsection
	
	<div class="title-page">
		<h1>Fornecedores</h1>
	</div>
	
	<div class="table-weight">
	<table class="table table-sm table-striped table-bordered table-hover center">
		<thead class="thead-dark">
			<th class="sticky-header">Código</th>
			<th class="sticky-header">Nome</th>
			<th class="sticky-header">E-mail</th>
			<th class="sticky-header">Telefone</th>
			<th class="sticky-header">Celular</th>
			<th class="sticky-header">Opções</th>
		</thead>
		<tbody>
			@foreach($fornecedores as $f)
				<tr>
					<td>{{ $f->id }}</td>
					<td>{{ $f->nome }}</td>
					<td>{{ $f->email }}</td>
					<td>{{ $f->telefone }}</td>
					<td>{{ $f->celular }}</td>
					<td>
						<a href="{{ route('fornecedor.show',$f->id)}}" class="btn btn-warning">Detalhes</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	<br>
	<nav class="btn-list">
		<a href="" class="btn btn-secondary">Voltar</a>
		<a href="{{route('fornecedor.create')}}" class="btn btn-dark">Cadastrar Fornecedor</a>
	</nav>
@endsection