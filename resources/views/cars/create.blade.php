@extends('layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Add New Car </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('cars.index') }}"> Back to Car List</a>
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

	<form action="{{ route('cars.store') }}" method="POST">
		@csrf
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Registration:</strong>
					<input type="text" name="Registration" class="form-control" placeholder="Registration">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Model:</strong>
					<input type="text" name="Model" placeholder="Model" class="form-control">
				</div>
			</div>
			
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Series:</strong>
					<input type="text" name="Series" placeholder="Series" class="form-control">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Production year:</strong>
					<input type="date" name="Production year" placeholder="Production year" class="form-control">
				</div>
			</div>			

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Mass (Kg):</strong>
					<input type="number" name="Mass" placeholder="Mass" class="form-control">
				</div>
			</div>
			
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Fuel Consumption (l/km):</strong>
					<input type="floatval" name="Fuel Consumption" placeholder="Fuel Consumption" class="form-control">
				</div>
			</div>			

			<div class="col-lg-12">
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
@endsection