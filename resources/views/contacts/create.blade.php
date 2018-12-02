@extends('layouts.default', ['title' => 'Contact'])

@section('content')

<div class="row">
	<div class="cold-md-8 cold-md-offset-2 col-sm-10 col-sm-offset-1">
		<h2>Get in touch</h2>
		<p class="text-muted">If you having trouble with this service, please <a href="mailto: {{ config('laracarte.admin_support_email') }}">ask for help</a>.</p>
	
	<form action="{{ route('contact') }}" method="POST">
		{{ csrf_field() }}


		<div class="form-group">
			<label for="name" class="control-label">Name</label>
			<input type="text" name="name" placeholder="Veuillez entrer votre nom" value="{{ old('name') }}" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" required="required">
			{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
		</div>

		<div class="form-group">
			<label for="email" class="control-label">Email</label>
			<input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" value = "{{ old('email') }}" required="required" placeholder="Veuillez entrer votre email, eg : toto@gmail.com">
			{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
		</div>

		<div class="form-group">
			<label for="message" class="sr-only control-label">Message</label>
			<textarea name="message" id="message" cols="10" rows="10" required="required" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Veuillez entrer votre message ici ...">{{ old('message') }}</textarea>
			{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-block btn-primary">Submit Enquiry &raquo;</button>
		</div>
	</form>
		
	</div>
</div>
@endsection
