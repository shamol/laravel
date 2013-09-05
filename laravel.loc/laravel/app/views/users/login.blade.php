@extends('layout')

@section('content')

@if($message = Session::get('success'))
    <div class="panel-success">
        {{$message}}
    </div>
@endif

<h3>Login</h3>
    {{ Form::open([
        "route"=>"user/login",
        "autocomplete"=>"off"
    ]) }}

    {{ Form::label("username", "Username")}}
    {{ Form::text("username", Input::old("username"), ["placeholder" => "john.smith"])}}

    @if ($error = $errors->first("username"))
        <div class="error">
            {{ $error }}
        </div>
    @endif

    {{ Form::label("password", "Password") }}
    {{ Form::password("password",["placeholder" => "*******"]) }}

    @if ($error = $errors->first("password"))
        <div class="error">
            {{ $error }}
        </div>
    @endif


    {{ Form::submit("login")}}
    {{ Form::close() }}
@stop

@section("footer")
    @parent
    <script src="//polyfill.io"></script>
@stop