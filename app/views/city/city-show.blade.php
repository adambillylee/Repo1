<!DOCTYPE html>
<html>
<head>
	<title>Show City</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="jumbotron text-center">
		<h2>{{ $city->name }}</h2>
		<p>
			<strong>Province:</strong> {{ $city->province }}<br>
		</p>
		<a class="btn btn-small btn-info" href="{{ URL::to('city/' . $city->id .'/edit' ) }}">Edit this city</a>
	</div>
	</div>

</body>
</html>