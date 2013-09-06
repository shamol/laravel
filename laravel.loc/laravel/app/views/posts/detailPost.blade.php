@extends('layout')
    @section('content')
        @if($failure = Session::get('failure'))
            <div class="error">
                {{ $failure }}
            </div>
        @else
            <h3>Post Detail</h3>
            @if($success = Session::get('success'))
            <div class="error">
                {{ $success }}
            </div>
            @endif
            <h4>{{ $post->title }}</h4>
            <p>{{ $post->message}}</p>

            @if(Auth::check())
                {{ Form::open(array('url' => 'comment')) }}
                    {{ Form::label('comment', 'Comment')}}
                    {{ Form::text('comment') }}
                    @if($error = $errors->first('comment'))
                        <div class="error">
                            {{ $error }}
                        </div>
                    @endif

                    {{ Form::submit('Post comment') }}
                    {{ Form::hidden('post_id', $id) }}
                {{ Form::close() }}
            @else
                <p><a href="{{ URL::route('user/login') }}">Login to leave a comment</p>
            @endif
        @endif
    @stop