@extends('layout')

    @section('content')

        @if (isset($notFound) || $error = Session::get('error'))
            <div class="error">
                {{$notFound}}
            </div>
        @elseif ($error = Session::get('error'))
            <div class="error">
                {{$error}}
            </div>
        @else
            @if ($success = Session::get('success'))
                <div class="panel-success">
                    {{$success}}
                </div>
            @endif

            <h3>Edit Post</h3>
            {{ Form::open() }}

            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $post->title) }}

            @if ($error = $errors -> first('title'))
                <div class="error">
                    {{$error}}
                </div>
            @endif

            {{ Form::label('message', 'Message') }}
            {{ Form::text('message', $post->message) }}

            {{ Form::submit('Save') }}
            {{ Form::close() }}
        @endif
    @stop