<!-- File: app/views/user-edit.blade.php -->

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
		<li><a href="{{ URL::to('user') }}">View All Users</a></li>
		<li><a href="{{ URL::to('user/create') }}">Create a User</a>
	</ul>
</nav>

<h1>Edit {{ $user->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('mail', 'Email') }}
		{{ Form::text('mail', null, array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Edit the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>