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
					{{ $review->review }}
				</div>
			</div>
	</div>
@endsection