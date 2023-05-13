@extends('layouts.app')

@section('content')

    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full px-2 pt-2">
                <a href="/blog" class="recipe-back-button py-2 px-4 bg-blue-500 text-white text-sm rounded">Go back</a>
                <div class="border rounded mt-5 p-4">
                    <h1 class="text-4xl font-bold mb-2" style="color: #4a5568">Create a New Recipe</h1>
                    <p class="text-base mb-4">Fill and submit this form to create a new recipe</p>

                    <hr>

                    <form action="" method="POST" class="w-full max-w-lg">
                        @csrf
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label for="recipe_name" class="form-label" style="margin-top:4px">Recipe Name</label>
                                <input type="text" id="recipe_name" class="form-input" name="recipe_name"
                                       placeholder="Enter Recipe Name" required>
                            </div>
                            <div class="w-full px-3 mt-2">
                                <label for="recipe_description" class="form-label">Recipe Description</label>
                                <textarea id="recipe_description" class="form-input" name="recipe_description" placeholder="Enter Recipe Description"
                                          rows="3" required></textarea>
                            </div>
                            <div class="w-full px-3 mt-2">
                                <label for="recipe_ingredients" class="form-label">Ingredients</label>
                                <textarea id="recipe_ingredients" class="form-input" name="recipe_ingredients" placeholder="Enter Recipe Ingredients"
                                          rows="3" required></textarea>
                            </div>
                            <div class="w-full px-3 mt-2">
                                <label for="cuisine" class="form-label">Cuisine</label>
                                <textarea id="cuisine" class="form-input" name="cuisine" placeholder="Enter Cuisine"
                                          rows="3" required></textarea>
                            </div>
                            <div class="w-full px-3 mt-2">
                                <label for="recipe_img" class="form-label">Recipe Image Link(500x500)</label>
                                <textarea id="recipe_img" class="form-input" name="recipe_img" placeholder="Enter URL"
                                          rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="flex flex-wrap mt-2">
                            <div class="w-full text-center">
                                <button id="btn-submit" class="recipe-create-button py-2 px-4 bg-blue-500 text-white text-sm rounded">
                                    Create Recipe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
