@extends('layouts.default', ['title' => 'Ajout un article'])

@section('content')
<br>
<div class="col-sm-offset-3 col-sm-6">
	<div class="panel panel-info">
		<div class="panel-heading">Ajout d'un article</div>
		<div class="panel-body"> 
			
			{!! Form::open(['route' => 'post.store']) !!}
			
			<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
				{!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Titre du post']) !!}
				{!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
			</div>

			<div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
				{!! Form::textarea ('contenu', null, ['class' => 'form-control', 'placeholder' => 'Contenu du post']) !!}
				{!! $errors->first('contenu', '<small class="help-block">:message</small>') !!}
			</div>

			<div class="class form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
				{!! Form::text('tags', null, ['class' => 'form-control', 'placeholder' => 'Entrez les tags séparés par des virgules']) !!}
				{!! $errors->first('tags', '<small class="help-block">:message</span>') !!}
			</div>

			{!! Form::submit('Envoyer !', ['class' => 'btn btn-block btn-info pull-right']) !!}
			<br>
			{!! Form::close() !!}
		</div>
	</div>
	<br>
	<a href="javascript:history.back()" class="btn btn-primary">
		<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
	</a>
</div>
<br>
@endsection