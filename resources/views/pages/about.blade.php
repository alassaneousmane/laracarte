@extends('layouts.default', ['title' => 'About'])

@section('content')
<h2>What is Laracarte</h2>
<p>Laracarte is a clone app of <a href="//laramap.com" target="_blank">Laramap.com</a></p>

<div class="row">
	<div class="col-md-6">
		<p class="alert alert-danger">
			<strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This app has been built by <a href="//twitter.com/etsmo">@etsmo </a>for learning purposes.</strong>
		</p>
	</div>
</div>

<p>Feel free to help to improve the <a href="#">source code</a>.</p>
<hr>
<h2>What is Laramap ?</h2>
<p>Laramap is the website by which Laracarte was inspired :)</p>
<p>More info <a href="https://laramap.com/p/about">here</a>.</p>
<h2>Which tools and services are used in Laracarte?</h2>
<p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>
<ul>
	<li>Laravel</li>
	<li>Bootstrap</li>
	<li>Amazon S3</li>
	<li>Mandrill</li>
	<li>Google Maps</li>
	<li>Gravatar</li>
	<li>Antony Martin's Geolocation Package</li>
	<li>Michel Fortin's Markdown Parser Package</li>
	<li>Heroku</li>
</ul>
@stop