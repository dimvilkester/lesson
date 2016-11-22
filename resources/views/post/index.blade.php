@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <article>
            <h2>{{ $post->fullname }}</h2>
            <p>{{ $post->namberphone }}</p>
            <p>published: {{ $post->published_at }}</p>
        </article>
    @endforeach
@stop
