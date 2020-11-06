@extends('app');
@section('title','Categorias')

@section('content')
	<h1>Categorias</h1>
	<a href="{{ route('categoria.create')}}" class="btn btn-primary">Criar Categoria</a>
	</br>

	@if(session('sucesso_cadastro'))
		</br>
    		<div class="alert alert-success">
      	 		 <p>{{session('sucesso_cadastro')}}</p>
   		 	</div>
	@endif

	@if(session('sucesso_exclusao'))
		</br>
    		<div class="alert alert-warning">
      	 		 <p>{{session('sucesso_exclusao')}}</p>
   		 	</div>
	@endif

	</br>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<th>Código</th>
			<th>Categoria</th>
			<th>Descrição</th>
			<th>Opções</th>
		</thead>
		<tbody>
			@foreach($categorias as $categoria)
				<tr>
					<td>{{ $categoria->id }}</td>
					<td>{{ $categoria->nome }}</td>
					<td>{{ $categoria->descricao }}</td>
					<td>
						<a href="{{ route('categoria.edit',$categoria->id)}}" class="btn btn-success">Editar</a>
						<a href="{{ route('categoria.destroy',$categoria->id)}}" class="btn btn-danger">Excluir</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection