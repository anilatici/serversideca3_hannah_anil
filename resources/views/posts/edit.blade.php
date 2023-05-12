@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Recipe Name</label>
            <input type="text" name="recipe_name" value="{{ $post->recipe_name }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Recipe Description</label>
            <textarea name="recipe_description" class="form-control" required>{{ $post->recipe_description }}</textarea>
        </div>

        <div class="form-group">
            <label>Ingredients</label>
            <textarea name="ingredients" class="form-control" required>{{ $post->ingredients }}</textarea>
        </div>

        <div class="form-group">
            <label>Cuisine</label>
            <input type="text" name="cuisine" value="{{ $post->cuisine }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
