@extends('layout')
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Available cars! </h3>
			</div>
			@can('manage-users')
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('cars.create') }}"> Create New Car </a>
			</div>			
			@endcan
		</div>
	</div>

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			<p> {{ $message }} </p>
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th> Registration Nr.:</th>
			<th> Model: </th>
			<th> Series:</th>
			<th> Actions:</th>
		</tr>
		@foreach($car as $key => $cars)
			@if($cars->isRenting == 0)
			<tr>
				<td> {{ $cars->registration }} </td>			
				<td> {{ $cars->model }} </td>
				<td> {{ $cars->series }} </td>
				<td>
					<form action="{{ route('cars.destroy', $cars->registration) }}" method="POST">
					<a class="btn btn-info " href="{{ route('cars.show', $cars->registration) }}">Show info</a>
					@can('manage-users')
						<a class="btn btn-warning" href="{{ url('rents/create', $cars->registration)  }}">Rent this car!</a>
						<a class="btn btn-primary" href="{{ route('cars.edit', $cars->registration) }}">Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
						@endcan
					</form>
				</td>				 
			</tr>
			@endif
		@endforeach
	</table>
@endsection