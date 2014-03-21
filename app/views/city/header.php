<html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('city') }}">City Management</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('city') }}">View All Cities</a></li>
		<li><a href="{{ URL::to('city/create') }}">Create a City</a>
	</ul>
</nav>