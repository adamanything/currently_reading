<div class='form-group'>
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('link', 'Enter Link:', ['class' => 'control-label']) !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('change this', ['class' => 'btn btn-primary']) !!}

