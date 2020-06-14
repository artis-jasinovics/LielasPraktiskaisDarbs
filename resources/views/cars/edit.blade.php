@extends('layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Edit Car </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('cars.index') }}"> Back to Car List </a>
			</div>
		</div>
	</div>

	@if($errors->any())
		<div class="alert alert-danger">
			<strong>Oops! </strong> Something went wrong.
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="{{ route('cars.update', $car->registration) }}" method="POST">
		@csrf
		@method("PUT")
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Registration:</strong>
					<input type="text" name="Registration" value="{{ $car->registration }}" class="form-control" placeholder="Registration">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Model:</strong>
					<input type="text" name="Model" value="{{ $car->model }}" placeholder="Model" class="form-control">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Series:</strong>
					<input type="text" name="Series" value="{{ $car->series }}" placeholder="Series" class="form-control">
				</div>
			</div>

			<div class="col-lg-12">
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
@endsection