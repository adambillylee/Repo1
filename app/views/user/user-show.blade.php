<!-- app/views/user-show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('user') }}">User Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('user') }}">View All User</a></li>
		<li><a href="{{ URL::to('user/create') }}">Create a User</a>
	</ul>
</nav>

<h1>Showing {{ $user->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $user->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $user->mail }}<br>
		</p>
		<a class="btn btn-small btn-info" href="{{ URL::to('user/' . $user->id .'/edit' ) }}">Edit this user</a>
	</div>

</div>
</body>
</html>