@extends('layout')
@section('content')
@if($message = Session::get('success'))
		<div class="alert alert-success">
			<p> {{ $message }} </p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th> Registration Nr.:</th>
			<th> Username: </th>
			<th> Email:</th>
			<th> Role:</th>
			<th> Actions:</th>
		</tr>
		@foreach($users as $user)
			<tr>
				<td> {{ $user->id }} </td>			
				<td> {{ $user->name }} </td>
				<td> {{ $user->email }} </td>
				<td> {{ implode(', ',$user->roles()->get()->pluck('name')->toArray()) }} </td>
				<td>
					<form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
						<a class="btn btn-primary" href="{{ route('admin.users.edit', $user->id)}}">Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>				 
			</tr>
		@endforeach
	</table>

@endsection