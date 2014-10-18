@extends("master")

@section("title")
	Problem Set 3 Home
@stop

@section("content")
	This is my index

	<p>Here is a link to my lorem ipsum generator<p>
	<a href="{{URL::asset("./lorem-ipsum.blade.php")}}">Lorem Ipsum Link</a>

	<p>Here is a link to my generate a random user</p>
	<a href="{{URL::asset("./random-user.blade.php")}}">Random User Generator</a>
@stop
