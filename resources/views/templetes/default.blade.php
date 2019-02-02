<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>@yield('title','Chatty')</title>
</head>
<body>
	<div class="container">
		@include('templetes.partials.navigation')
		@include('templetes.partials.alerts')
		@yield('content')
	</div>
</body>
</html>