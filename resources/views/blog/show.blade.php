@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full px-2 py-4">
                <a href="/blog" class="recipe-back-button py-2 px-4 bg-blue-500 text-white text-sm rounded">Go back</a>
                <h1 class="recipe-heading text-4xl font-bold mb-2">{{ ucfirst($recipe->recipe_name) }}</h1>
                <p class="recipe-description text-base mb-4">{!! $recipe->recipe_description !!}</p>
                <p style="margin-bottom:7px"><strong>Ingredients:</strong> {{ $recipe->recipe_ingredients }}</p> 
                <p style="margin-bottom:7px"><strong>Cuisine:</strong> {{ $recipe->cuisine }}</p>
                <hr class="mb-4">
                <a href="/blog/{{ $recipe->id }}/edit" class="recipe-edit-button py-2 px-4 bg-blue-500 text-white text-sm rounded">Edit Post</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="recipe-delete-button py-2 px-4 bg-red-500 text-white text-sm rounded">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection