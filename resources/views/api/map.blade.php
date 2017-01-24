@extends('adminlte::page')

@section('title', 'AdminTRACE')


@section('content_header')

@stop

@section ('js')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzp24dpeK8kEmOcX-lx7fHqPJ4Ywas1nA&libraries=places"></script>
    <!-- <script type="text/javascript" src="/js/googleMapsApi.js"></script> -->
	<script type="text/javascript" src="/js/maps.js"></script>    

@stop

@section('content')


    	<div id="map" style="height:100%; width:100%;"></div>

@stop