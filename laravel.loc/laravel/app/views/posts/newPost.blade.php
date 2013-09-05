@extends('layout')

@section('content')

    @if ($error = Session::get('error'))
        <div class="error">
            {{$error}}
        </div>
    @elseif ($success = Session::get('success'))
        <div class="panel-success">
            {{$success}}
        </div>
    @endif

    <h3>New Post</h3>
    {{ Form::open() }}

    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', Input::old('title')) }}

    @if ($error = $errors -> first('title'))
        <div class="error">
            {{$error}}
        </div>
    @endif

    {{ Form::label('message', 'Message') }}
    {{ Form::text('message', Input::old('message')) }}

    {{ Form::submit('Post') }}
    {{ Form::close() }}

@stop