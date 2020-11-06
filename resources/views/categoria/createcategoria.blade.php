@extends('app');
@section('title','Criar Categoria')

@section('content')

	<h1>Nova Categoria</h1>

	@if($errors->any())
		<ul class="alert alert-warning">
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>
	@endif
	
	{!! Form::open(['route'=>'categoria.store']) !!}

		<div class="form-group">
			{!! Form::label('nome','Nome da Categoria:') !!}
			{!! Form::text('nome',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('descricao','Descrição da Categoria:') !!}
			{!! Form::textarea('descricao',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Criar Categoria',['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection