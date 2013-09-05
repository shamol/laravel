@extends('layout')

@section('content')
    <p>Name: {{$user->name}}</p>
    <p>Email: {{$user->email}}</p>
    <p>Timezone: {{$timezone}}</p>
@stop