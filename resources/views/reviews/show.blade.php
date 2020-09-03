@extends('layout')
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Showing reviews for car '{{$result[0]->registration}}' </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('cars.show', $result[0]->registration)  }}"> Back to Car </a>
			</div>
			@can('manage-users')
			<div class="pull-right">
				<a class="btn btn-success" href="{{ url('review/create', $result[0]->registration)  }}"> Leave a review! </a>
			</div>
			@endcan
		</div>
	</div>

@foreach ($result as $key=>$reviews)

	<div class="card">
			<div class="card-header">
					Posted by {{$reviews->creator}} at {{ $reviews->created_at }}
			</div>
			<div class="card-body">
				<div>
					"{{ $reviews->Review }}"
				</div>
				<div class="pull-right">
				@can('edit-users')
				<form action="{{ route('reviews.destroy', $reviews->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger tiny">X</button>
				</form>
				@endcan
			</div>
			</div>
	</div>

@endforeach
@endsection