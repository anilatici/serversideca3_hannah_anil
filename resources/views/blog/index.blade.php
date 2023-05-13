@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="px-2 py-4">
            <h1 class="index-heading text-4xl font-bold mb-2">Food Blog</h1>
            <p class="text-base mb-4">Enjoy reading our recipes. Click on a recipe to read!</p>
            <p class="text-base mb-2">Create new Recipe</p>
            <a href="/blog/create/post" class="index-button py-2 px-4 bg-blue-500 text-white text-sm rounded mb-4">Add Recipe</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse($recipes as $recipe)
                <div class="px-2">
                    <a href="./blog/{{ $recipe->id }}">
                        <img class="w-full" src="{{ $recipe->recipe_img }}" alt="{{ $recipe->recipe_name }}" class="object-cover w-full h-64 rounded">
                    </a>
                    <ul class="list-none pl-0 mt-2">
                        <li class="py-1"><a href="./blog/{{ $recipe->id }}" class="index-link text-blue-500 hover:underline">{{ ucfirst($recipe->recipe_name) }}</a></li>
                    </ul>
                </div>
            @empty
                <p class="index-warning text-yellow-500">No recipes available</p>
            @endforelse
        </div>
    </div>
@endsection
