<div class='form-group'>
    {!! Form::label('comment', 'Comment:', ['class' => 'control-label']) !!}
    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('change this', ['class' => 'btn btn-primary']) !!}