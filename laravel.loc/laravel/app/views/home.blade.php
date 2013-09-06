@extends('layout')

@section('content')
    <h3>Home</h3>

    @foreach ($posts as $post)
        <h4><a href="{{ URL::to('postDetail/'.$post->id) }}">{{ $post->title }}</a></h4>
        <p>{{ $post->message }}</p>
    @endforeach
@stop