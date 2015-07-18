@extends('layouts.master')

@section('content')

    <h1><a href="{{$reading->link}}">{{$reading->title}}</a></h1>

  @if(Auth::id() == $reading->user_id)
      <a class='btn btn-primary' href="{{$reading->id}}/edit">Edit Entry</a>
  @endif
        @if($comments != null)
            @foreach($comments as $comment)
                @if($comment->reading_id == $reading->id)
                  <li>{{$comment->comment}}</li>
                    @if(Auth::id() == $comment->user_id)
                        <li class="indentCommentEdit"><a href="/currently_reading/comment/{{$comment->id}}/edit">Edit</a></li>
                    @endif
                @endif
            @endforeach
        @endif

    @if(Auth::id() != null)
    {!! Form::open(array('method' => 'POST', 'action' => ['CommentsController@store', $reading->id])) !!}

    @include('partials.commentForm', ['Create'])

    {!! Form::close() !!}
    @endif
    @stop
