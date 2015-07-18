@extends('layouts.master')

@section('content')
	<h3>Create Content Section</h3>

	{!! Form::open(array('action' => 'CurrentlyReadingController@store')) !!}

		@include('partials.currentlyReadingForm', ['Create'])

	{!! Form::close() !!}

		@include('partials.errors')

@stop