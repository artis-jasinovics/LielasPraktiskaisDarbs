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
		@csrf

{{ Form::open(['action' =>['CarController@store'],'method' => 'post']) }}
<div>
{{ Form::label('registration', 'Registration') }}
{{ Form::text('registration') }}
</div>
<div>
{{ Form::label('model', 'Model') }}
{{ Form::text('model') }}
</div>
<div>
{{ Form::label('series', 'Series') }}
{{ Form::text('series') }}
</div>
<div>
{{ Form::label('produced_on', 'Produced On') }}
{{ Form::date('produced_on') }}
</div>
<div>
{{ Form::label('full_mass', 'Mass (kg)') }}
{{ Form::number('full_mass') }}
</div>
<div>
{{ Form::label('fuel_consumption', 'Fuel Consumption (l/100km)') }}
{{ Form::number('fuel_consumption') }}
</div>
<div>
</div>
{{ Form::submit('Save') }}
{{ Form::close() }}
@endsection