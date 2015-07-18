@extends('layouts.master')
@section('content')


    {!! Form::open(array('action' => array('CommentsController@update', $comment ))) !!}

    @include('partials.commentForm', ['Create'])

    {!! Form::close() !!}

    @stop