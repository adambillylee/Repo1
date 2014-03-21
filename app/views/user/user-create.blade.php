<!-- app/views/user-create.blade.php -->

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

<h1>Create a User</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'user')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('mail', 'Email') }}
		{{ Form::text('mail', Input::old('email'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>