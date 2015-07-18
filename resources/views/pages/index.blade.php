@extends('layouts.master')

@section('content')

    <h1>HomePage</h1>

    @foreach($readingList as $list)

        <h3><a href="/currently_reading/{{$list->id}}">{{$list->title}}</a></h3>

    @endforeach

    @stop