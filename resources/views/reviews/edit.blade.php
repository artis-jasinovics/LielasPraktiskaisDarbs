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
			<th> No </th>
			<th> Model </th>
			<th> Series</th>
		</tr>
		@foreach($cars as $key => $cars)
			<tr>
				<td> {{ $cars->registration }} </td>			
				<td> {{ $cars->model }} </td>
				<td> {{ $cars->series }} </td>
				 
			</tr>
		@endforeach
	</table>
@endsection