@extends("_master")

@section("title")
	XKCD Generator
@stop

@section("heading")	
	<h1>XKCD Password Generator</h1> 
	<div class="return">
		<a href="{{ asset("/") }}">Return to main page</a>
	</div>
@stop

@section("content")
<!-- XKCD display -->
	<div class="result">
		<p>
			<?= $result ?>
		</p>
	</div>
	{{ Form::open(array("url" => "/xkcd-generator")) }}
		{{ Form::select("amount", array(
			"1" => "1",
			"2" => "2", 
			"3" => "3",
			"4" => "4",
			"5" => "5",
			"6" => "6",
			"7" => "7",
			"8" => "8",
			"9" => "9"
		)) }}
		{{ Form::label("amount", "Enter amount of words") }}
		<br>
		{{ Form::checkbox("number", "1") }}
		{{ Form::label("number", "Add a number") }}
		<br>
		{{ Form::checkbox("symbol", "1") }}
		{{ Form::label("symbol", "Add a symbol") }}
		<br><br> 
		{{ Form::submit("Generate") }}
	{{ Form::close() }}
@stop
