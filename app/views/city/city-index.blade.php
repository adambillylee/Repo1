<!--/app/views/city/city-index.blade.php-->

<!DOCTYPE html>
<html>
<head>
	<title>City list</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>


<div class="container">

@if (Session::has('message'))
	<div class="alert alert-info">{{Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Province</td>
			<td>Polulation</td>
			<td>Operations</td>
		</tr>
	</thead>
	<tbody>
	@foreach($cities as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->name }}</td>
			<td>{{ $value->province }}</td>
			<td>{{ $value->population }}</td>

			<!-- Buttons -->
			<td>

				<!-- delete the city (uses the destroy method DESTROY /city/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
				{{ Form::open(array('url' => 'city/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this City', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}	

				<!-- show the city (uses the show method found at GET /user/{id} -->
				<a class="btn btn-small btn-success" href="{{URL::to('city/' . $value->id )}}">Show this city</a>

				<!-- edit this city (uses the edit method found at GET /user/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{URL::to('city/' . $value->id .'/edit' )}}">Edit this city</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<a class="btn btn-small btn-info" href="{{URL::to('city/create' )}}">Create new city</a>

</div> <!--container-->

</body>
</html>