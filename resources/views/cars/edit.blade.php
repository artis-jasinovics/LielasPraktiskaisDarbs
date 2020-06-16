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

	<!--<form action="{{ route('cars.update', $car->registration) }}" method="POST">
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
	</form> -->
	{{ Form::open(['action' =>['CarController@update', $car->registration],'method' => 'put']) }}
<div>
{{ Form::label('registration', 'Registration') }}
{{ Form::text('registration', $car->registration) }}
</div>
<div>
{{ Form::label('model', 'Model') }}
{{ Form::text('model', $car->model) }}
</div>
<div>
{{ Form::label('series', 'Series') }}
{{ Form::text('series',$car->series) }}
</div>
<div>
{{ Form::label('produced_on', 'Produced On') }}
{{ Form::date('produced_on', $car->produced_on) }}
</div>
<div>
{{ Form::label('full_mass', 'Mass (kg)') }}
{{ Form::number('full_mass', $car->full_mass) }}
</div>
<div>
{{ Form::label('fuel_consumption', 'Fuel Consumption (l/100km)') }}
{{ Form::number('fuel_consumption', $car->fuel_consumption) }}
</div>
<div>
</div>
{{ Form::submit('Save') }}
{{ Form::close() }}
	@endsection