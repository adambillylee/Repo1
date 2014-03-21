<!--/app/views/city/city-edit.blade.php-->

<!DOCTYPE html>
<html>
<head>
	<title>Edit City</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>

	<div class="container">

	<h1>Edit City: {{$city->name}}</h1>

	{{ Form::model($city, array('route' => array('city.update', $city->id), 'method' => 'PUT')) }}

		<div class="form-group">
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('province', 'Province:') }}
			{{ Form::text('province', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('population', 'Population:') }}
			{{ Form::text('population', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit the City!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}

	</div><!--container-->

</body>
</html>