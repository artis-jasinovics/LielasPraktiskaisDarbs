@extends('layout')
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Available cars! </h3>
			</div>
		</div>
	</div>

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			<p> {{ $message }} </p>
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th> From: </th>
			<th> To: </th>
			<th> Car: </th>
			<th> Options: </th>
		</tr>
		@foreach($rent as $key => $rent)
			<tr>
				<td> {{ $rent->rented_from }} </td>			
				<td> {{ $rent->rented_to }} </td>
				 <td> {{ $rent->registration }} </td>
				 <td>
				 <form action="{{ route('rents.destroy', $rent->id) }}" method="POST">
						<a class="btn btn-info " href="{{ route('cars.show', $rent->registration) }}">Show info</a>
						<a class="btn btn-primary" href="{{ route('rents.edit', $rent->id) }}">Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
					</td>
			</tr>
		@endforeach
	</table>
@endsection