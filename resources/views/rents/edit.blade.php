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

{{ Form::open(['action' =>['RentController@update', $rent->id],'method' => 'put']) }}
<div>
{{ Form::label('registration', 'Registration') }}
{{ Form::text('registration', $rent->registration) }}
</div>
<div>
{{ Form::label('rented_from', 'Rented From') }}
{{ Form::date('rented_from', $rent->rented_from) }}
</div>
<div>
{{ Form::label('rented_to', 'Rented Until') }}
{{ Form::date('rented_to',$rent->rented_to) }}
</div>
{{ Form::submit('Save') }}
{{ Form::close() }}
@endsection