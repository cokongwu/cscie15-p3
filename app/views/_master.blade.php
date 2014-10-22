<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		@yield("title")
	</title>
	<link rel="stylesheet" href="{{ asset("mycss.css") }}">
</head>
<body>
<div id="main">
	@yield("heading")
	@yield("content")
	@yield("result")
</div>
</body>
</html>
