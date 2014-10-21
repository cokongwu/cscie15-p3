@extends("_master")

@section("title")
	Lorem Ipsum Generator
@stop

@section("heading")

	<h1>Lorem Ipsum Generator</h1>
	<div class="return">
		<a href="{{ asset("/") }}">Return to main page</a>
	</div>
@stop

@section("content")

	{{ Form::open(array("url" => "/lorem-ipsum")) }}
		{{ Form::text("paragraphs", "2", array(
			"maxlength" => "2")) }}
		{{ Form::label("paragraphs", "Enter number of paragraphs") }}<br>
		<br>
		{{ Form::submit("Generate text") }}
	{{ Form::close() }}
	
	<p>
	<?php
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($amount);
		echo implode("<p>", $paragraphs);
	?>

	</p>
@stop
