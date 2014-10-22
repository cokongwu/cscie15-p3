@extends("_master")

@section("title")
	Random User Generator
@stop

@section("heading")
	<h1>Random User Generator</h1> 
	<div class="return">
		<a href="{{ asset("/") }}">Return to main page</a>
	</div>

@stop

@section("content")
	{{ Form::open(array("url" => "/random-user")) }}
		{{ Form::text("numUsers", "4", array(
			"maxlength" => "2")) }}
		{{ Form::label("numUsers", "Enter number of users") }}<br>
		{{ Form::checkbox("date", "1") }}
		{{ Form::label("date", "Add enroll date") }}<br>
		{{ Form::checkbox("about", "1") }}
		{{ FOrm::label("about", "Add about section") }}<br>
		<br>
		{{ Form::submit("Generate Users") }}
	{{ Form::close() }}
@stop

@section("result")

	@if(isset($result))
		{{ "<div id=\"result\">\n".$result."</div>" }}
	@endif
@stop
