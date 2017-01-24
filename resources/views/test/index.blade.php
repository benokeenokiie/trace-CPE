@extends('adminlte::page')

@section('title', 'AdminTRACE')


@section('content_header')

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

@stop

@section('content')


	@section('content')
	<div class="container">
	<div class="row">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Latitude</th>
					<th>Longitude</th>
					<th>Action</th>
				</tr>
			</thead>
			<a href="{{route('test.create')}}" class="btn btn-info pull-right">Create a New Data</a>
			<?php $no=1; ?>

			@foreach($tests as $test)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$test->lat}}</td>
					<td>{{$test->lng}}</td>
					<td>
						<form class="" action="{{route('test.destroy', $test->id)}}" method="post">
							<input type="hidden" name="_method" value="delete">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<a href="{{route('test.edit', $test->id)}}" class="btn btn-primary">Edit</a>
							<input type="submit" class="btn btn-danger" onclick="return	confirm('Delete this data?');" name="name" value="Delete">


						</form>
					</td>
				</tr>		
			@endforeach

		</table>
	</div>
	</div>


	@stop