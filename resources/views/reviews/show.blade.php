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
			<div class="pull-right">
				<a class="btn btn-success" href="{{ url('review/create', $result[0]->registration)  }}"> Leave a review! </a>
			</div>
		</div>
	</div>

@foreach ($result as $key=>$reviews)
	<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>C:</strong>
					{{ $reviews->created_at }}
				</div>
			</div>

			<div class="col-lg-12 border">
				<div class="form-group">
					"{{ $reviews->Review }}"
				</div>
			</div>
	</div>
@endforeach
@endsection