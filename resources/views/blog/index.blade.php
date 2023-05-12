@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Food!</h1>
                        <p>Enjoy reading our recipes. Click on a recipe to read!</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Recipe</p>
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Recipe</a>
                    </div>
                </div>                
                @forelse($recipes as $recipe)
                    <ul>
                        <li><a href="./blog/{{ $recipe->id }}">{{ ucfirst($recipe->recipe_name) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No recipes available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection