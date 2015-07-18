@extends('layouts.master')

@section('content')
    <h1>Edit</h1>

    {!! Form::model($reading, ['method' => 'PATCH', 'action' => ['CurrentlyReadingController@update', $reading->id]]) !!}

    @include('partials.currentlyReadingForm', ['Create'])

    {!! Form::close() !!}

    @include('partials.errors')

    @stop