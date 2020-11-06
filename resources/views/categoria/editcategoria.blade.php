@extends('app');
@section('title','Editar Categoria - '.$categoria->nome)

@section('content')

	<h1>Editar Categoria "{{ $categoria->nome }}"</h1>

	@if(session('mensagem'))
    	<div class="alert alert-success">
      	  <p>{{session('mensagem')}}</p>
   		 </div>
	@endif

	@if($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif
	
	{!! Form::open(['route'=>['categoria.update',$categoria->id],'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('nome','Nome da Categoria:') !!}
			{!! Form::text('nome',$categoria->nome,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('descricao','Descrição da Categoria:') !!}
			{!! Form::textarea('descricao',$categoria->descricao,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Categoria',['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection