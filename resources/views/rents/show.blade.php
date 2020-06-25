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
					{{ $rent->registration }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Model:</strong>
					{{ $rent->rented_from }}
				</div>
			</div>
			
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Series:</strong>
					{{ $rent->rented_to }}
				</div>
			</div>	
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Production year:</strong>
					{{ $rent->renter_id }}
				</div>
			</div>	
	</div>
@endsection