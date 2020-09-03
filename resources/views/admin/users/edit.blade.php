@extends('layout')
@section('content')
@if($message = Session::get('success'))
		<div class="alert alert-success">
			<p> {{ $message }} </p>
		</div>
	@endif
	<div class= "header"> Edit user {{$user->name}} </div>
	@csrf
{{ Form::open(['action' =>['Admin\UsersController@update', $user->id],'method' => 'put']) }}
@foreach($roles as $role)
<div>
{{ Form::label('roles', $role->name) }}
{{ Form::checkbox('roles[]', $role->id) }}
</div>
@endforeach
{{ Form::submit('Save') }}
{{ Form::close() }}
@endsection