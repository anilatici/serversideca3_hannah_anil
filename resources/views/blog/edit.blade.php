@extends('layouts.app')

@section('content')

    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full px-2 py-4">
                <a href="/blog" class="recipe-back-button py-2 px-4 bg-blue-500 text-white text-sm rounded">Go back</a>
                <div class="recipe-edit-box border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="recipe-edit-heading text-4xl font-bold mb-2">Edit Recipe</h1>
                    <p class="recipe-edit-instructions text-base mb-4">Edit and submit this form to update a recipe</p>

                    <hr class="mb-4">

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-wrap -mx-2">
                            <div class="control-group w-full px-2 mt-2">
                                <label for="recipe_name" class="form-label">Recipe Name</label>
                                <input type="text" id="recipe_name" class="form-input" name="recipe_name"
                                       placeholder="Enter Recipe Name" value="{{ $recipe->recipe_name }}" required>
                            </div>
                            <div class="control-group w-full px-2 mt-2">
                                <label for="recipe_description" class="form-label">Recipe Description</label>
                                <textarea id="recipe_description" class="form-input" name="recipe_description" placeholder="Enter Recipe Description"
                                          rows="5" required>{{ $recipe->recipe_description }}</textarea>
                            </div>
                            <div class="control-group w-full px-2 mt-2">
                                <label for="recipe_ingredients" class="form-label">Ingredients</label>
                                <textarea id="recipe_ingredients" class="form-input" name="recipe_ingredients" placeholder="Enter Recipe Ingredients"
                                          rows="5" required>{{ $recipe->recipe_ingredients }}</textarea>
                            </div>
                            <div class="control-group w-full px-2 mt-2">
                                <label for="cuisine" class="form-label">Cuisine</label>
                                <textarea id="cuisine" class="form-input" name="cuisine" placeholder="Enter Cuisine"
                                          rows="5" required>{{ $recipe->cuisine }}</textarea>
                            </div>
                            <div class="control-group w-full px-2 mt-2">
                                <label for="recipe_img" class="form-label">Recipe Image Link(500x500)</label>
                                <textarea id="recipe_img" class="form-input" name="recipe_img" placeholder="Enter URL"
                                          rows="5" required>{{ $recipe->recipe_img }}</textarea>
                            </div>

                        </div>
                        <div class="flex flex-wrap -mx-2 mt-2">
                            <div class="control-group w-full px-2 text-center">
                                <button id="btn-submit" class="recipe-update-button py-2 px-4 bg-blue-500 text-white text-sm rounded">
                                    Update Recipe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
