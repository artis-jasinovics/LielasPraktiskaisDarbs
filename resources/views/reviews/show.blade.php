@extends('layout')
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Showing selected car info </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('cars.index') }}"> Back to Car </a>
			</div>
		</div>
	</div>

@foreach ($revs as $key->$reviews)
	<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Registration:</strong>
					{{ $revs->registration }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Model:</strong>
					{{ $revs->Review }}
				</div>
			</div>
	</div>
@endforeach
@endsection