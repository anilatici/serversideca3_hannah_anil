@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p><strong>Recipe Name:</strong> {{ $post->recipe_name }}</p>
    <p><strong>Recipe Description:</strong> {{ $post->recipe_description }}</p>
    <p><strong>Ingredients:</strong> {{ $post->recipe_ingredients }}</p>
    <p><strong>Cuisine:</strong> {{ $post->cuisine }}</p>

    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>

    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
