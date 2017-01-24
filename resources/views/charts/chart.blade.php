@extends('adminlte::page')

@section('title', 'AdminTRACE')

@section('content_header')

@stop


@section('content')

<div class="container">
        <div class="panel panel-success">
          	<div class="panel-heading">Chart Container</div>
            	{!! $chart->render() !!}
        </div>
</div>

	<!-- Include Required Prerequisites -->
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
		 
	<!-- Include Date Range Picker -->
		<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />


@stop