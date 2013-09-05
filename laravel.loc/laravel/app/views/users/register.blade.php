@extends('layout')

@section('content')
    @if($message = Session::get('error'))
        <div class="panel-success">
            {{$message}}
        </div>
    @endif

    <h3>Registration</h3>

    {{  Form::open(array('user/register')) }}

    {{  Form::label('emial', 'Email') }}
    {{  Form::text('email', Input::old('email'), array('placeholder' => 'you@example.com')) }}

    @if ($error = $errors -> first('email'))
        <div class="error">
            {{$error}}
        </div>
    @endif

    {{  Form::label('username', 'Username') }}
    {{  Form::text('username', Input::old('username'), array('placeholder' => 'john.smith')) }}

    @if ($error = $errors -> first('username'))
        <div class="error">
            {{$error}}
        </div>
    @endif

    {{  Form::label('password', 'Password')}}
    {{  Form::password('password', array('placeholder' => '*****')) }}

    @if ($error = $errors -> first('password'))
        <div class="error">
            {{$error}}
        </div>
    @endif

    {{  Form::submit('Register') }}
    {{  Form::close() }}
@stop

@section("footer")
    @parent
    <script src="//polyfill.io"></script>
@stop
