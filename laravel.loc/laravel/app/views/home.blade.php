@extends('layout')

@section('content')
    <h3>Home</h3>

    @foreach ($posts as $post)
        <h4>{{ $post->title }}</h4>
        <p>{{ $post->message }}</p>
    @endforeach
@stop