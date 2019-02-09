<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title> {{ page_title($title ?? '') }}</title>

	{{-- Google Fonts --}}
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="icon" href="https://getbootstrap.com/favicon.ico">

	<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.css">
	<link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	{{-- Customer Font--}}
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">

	<style>
		body {
			font-family: 'Helvetica', 'Open Sans', sans-serif;
			font-size: 16px;
		}
		footer {
			margin-top: 4em 0;
		}
	</style>
</head>
<body>

	@include('layouts.partials._nav')
	{{-- @include('layouts.partials._header') --}}
	<div class="container">
		@yield('content')		
	</div>
	@include('layouts.partials._footer')


<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://bootswatch.com/_assets/js/custom.js"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
@include('flashy::message')
<script src="{{ asset('/js/larails.js') }}"></script>
</body>
</html>