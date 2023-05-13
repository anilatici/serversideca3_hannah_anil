@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full px-2 py-4">
                 <div class="flex flex-wrap -mx-2">
                    <div class="w-2/3 px-2">
                        <h1 class="text-4xl font-bold mb-2">Food!</h1>
                        <p class="text-base mb-4">Enjoy reading our recipes. Click on a recipe to read!</p>
                    </div>
                    <div class="w-1/3 px-2 flex flex-col items-start">
                        <p class="text-base mb-2">Create new Recipe</p>
                        <a href="/blog/create/post" class="py-2 px-4 bg-blue-500 text-white text-sm rounded">Add Recipe</a>
                    </div>
                </div>                
                @forelse($recipes as $recipe)
                    <ul class="list-none pl-0 mb-2">
                        <li class="py-1"><a href="./blog/{{ $recipe->id }}" class="text-blue-500 hover:underline">{{ ucfirst($recipe->recipe_name) }}</a></li>
                    </ul>
                @empty
                    <p class="text-yellow-500">No recipes available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
