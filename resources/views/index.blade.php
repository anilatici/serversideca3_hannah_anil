@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
        <p>{{ $post->body }}</p>
    @endforeach
</div>
@endsection
