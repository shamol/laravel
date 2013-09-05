@extends('layout')

    @section('content')
        <h3>My Posts</h3>
        @foreach ($posts as $post)
            <p>{{ $post->title }} &nbsp;<a href="{{ URL::to('editPost/'.$post->id)}}">Edit</a></p>
        @endforeach
    @stop