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

{{ Form::open(['action' =>['RentController@store'],'method' => 'post']) }}
<div class="row">
{{ Form::label('registration', 'Registration:' ) }}
{{ Form::text('registration', $id, ['readonly']) }}
</div>
<div>
{{ Form::label('rented_from', 'Rented from:') }}
{{ Form::date('rented_from') }}
</div>
<div>
{{ Form::label('rented_to', 'Renting until') }}
{{ Form::date('rented_to') }}
</div>
<div>
{{ Form::submit('Save') }}
{{ Form::close() }}
</div>
@endsection