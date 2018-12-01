@extends('layouts.default', ['title' => 'Contact'])

@section('content')

<div class="row">
	<div class="cold-md-8 cold-md-offset-2 col-sm-10 col-sm-offset-1">
		<h2>Get in touch</h2>
		<p class="text-muted">If you having trouble with this service, please <a href="mailto:ousmanealassane.toure@gmail.com">ask for help</a>.</p>
	
	<form action="#" method="POST">
		<div class="form-group">
			<label for="name" class="control-label">Name</label>
			<input type="text" name="name" id="name" class="form-control" required="required">
		</div>

		<div class="form-group">
			<label for="email" class="control-label">Email</label>
			<input type="email" name="name" id="email" class="form-control" required="required">
		</div>

		<div class="form-group">
			<label for="message" class="sr-only control-label">Message</label>
			<textarea name="message" id="message" cols="10" rows="10" required="required" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<button class="btn btn-block btn-primary">Submit Enquiry &raquo;</button>
		</div>
	</form>
		
	</div>
</div>
@endsection
