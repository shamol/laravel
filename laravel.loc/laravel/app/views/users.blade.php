@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>Name: {{$user->name}} Email:{{$user->email}}</p>
    @endforeach
@stop