@extends('layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Showing selected car info </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('cars.index') }}"> Back to Car List </a>
			</div>
		</div>
	</div>

	<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Registration:</strong>
					{{ $car->registration }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Model:</strong>
					{{ $car->model }}
				</div>
			</div>
			
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Series:</strong>
					{{ $car->series }}
				</div>
			</div>	
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Production year:</strong>
					{{ $car->produced_on }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Mass:</strong>
					{{ $car->full_mass }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Fuel consumption:</strong>
					{{ $car->fuel_consumption }}
				</div>
			</div>			
	</div>
	<div class="row">
	<a class="btn btn-success" href="{{ route('reviews.show',$car->registration) }}"> See all reviews </a>
	</div>
@endsection