@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Recipe</h1>
                    <p>Edit and submit this form to update a recipe</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="recipe_name">Recipe Name</label>
                                <input type="text" id="recipe_name" class="form-control" name="recipe_name"
                                       placeholder="Enter Recipe Name" value="{{ $recipe->recipe_name }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="recipe_description">Recipe Description</label>
                                <textarea id="recipe_description" class="form-control" name="recipe_description" placeholder="Enter Recipe Description"
                                          rows="5" required>{{ $recipe->recipe_description }}</textarea>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="recipe_ingredients">Ingredients</label>
                                <textarea id="recipe_ingredients" class="form-control" name="recipe_ingredients" placeholder="Enter Recipe Ingredients"
                                          rows="5" required>{{ $recipe->recipe_ingredients }}</textarea>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="cuisine">Cuisine</label>
                                <textarea id="cuisine" class="form-control" name="cuisine" placeholder="Enter Cuisine"
                                          rows="5" required>{{ $recipe->cuisine }}</textarea>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
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