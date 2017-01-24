@extends('adminlte::master')

@section('title', 'AdminTRACE')


@section('content_header')

@stop

	@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>CREATE</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<form class="" action="{{route('test.store')}}" method="post">
				{{csrf_field()}}
				<div class="form-group{{ ($errors->has('lat')) ? $errors->first('lat') : '' }}">
					<input type="text" name="lat" class="form-control" placeholder="Enter Latitude Here">
					{!! $errors->first('lat','<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group{{ ($errors->has('lng')) ? $errors->first('lng') : '' }}">
					<input type="text" name="lng" class="form-control" placeholder="Enter Longitude Here">
					{!! $errors->first('lng','<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Save">
				</div>
			</form>
		</div>

	</div>
	</div>


	@stop