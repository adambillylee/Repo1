<!DOCTYPE html>
<html>
<head>
	<title>Create City</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class='container'>

	<h1>Create a City</h1>
	{{HTML::ul($errors -> all())}}

	{{ Form::open(array('url'=>'city')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name: ') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('province', 'Province: ') }}
		{{ Form::text('province', Input::old('province'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('population', 'Population: ') }}
		{{ Form::text('population', Input::old('email'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the City!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}

	</div> <!--container-->

</body>
</html>