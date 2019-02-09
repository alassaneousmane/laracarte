@extends('layouts.default', ['title' => 'Liste des articles'])

@section('content')

@if(isset($info))
<div class="row alert alert-info">{{ $info }}</div>
@endif
{!! $links !!}
@foreach($posts as $post)
<article class="row">
	<div class="col-md-12">
		<header>
			<h1>{{ $post->titre }}
				<div class="pull-right">
					@foreach($post->tags as $tag)
					{!! link_to('post/tag/'.$tag->tag_url, $tag->tag, ['class' => 'btn btn-xs btn-info']) !!}
					@endforeach
				</div>
			</h1>
		</header>
		<hr>
		<section>

			<p>{{ $post->contenu }}</p>
			
			@if(Auth::check() and Auth::user()->admin)
			{!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id]]) !!}
			{!! Form::submit('Supprimer cet article', ['class' => 'btn btn-danger btn-lg ', 'onclick' => 'return confirm(\'Voulez-vous vraiment supprimer cet article ?\')']) !!}
			{!! Form::close() !!}
			@endif
			<em class="pull-right">
				<span class="glyphicon glyphicon-pencil"></span> by {{ $post->user->name }} le {{ (new \DateTime($post->created_at))->format('d/m/Y H:i:s') }}
			</em>
		</section>
	</div>
</article>
<br>
@endforeach
{!! $links !!}
@stop