@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Create a New Recipe</h1>
                    <p>Fill and submit this form to create a new recipe</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="recipe_name">Recipe Name</label>
                                <input type="text" id="recipe_name" class="form-control" name="recipe_name"
                                       placeholder="Enter Recipe Name" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="recipe_description">Recipe Description</label>
                                <textarea id="recipe_description" class="form-control" name="recipe_description" placeholder="Enter Recipe Description"
                                          rows="" required></textarea>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="recipe_ingredients">Ingredients</label>
                                <textarea id="recipe_ingredients" class="form-control" name="recipe_ingredients" placeholder="Enter Recipe Ingredients"
                                          rows="" required></textarea>
                        </div>
                        <div class="control-group col-12 mt-2">
                                <label for="cuisine">Cuisine</label>
                                <textarea id="cuisine" class="form-control" name="cuisine" placeholder="Enter Cuisine"
                                          rows="" required></textarea>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
            Create Post
                                </button>
    </div>
</div>
                    </form>
                </div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

        <div class="bg-grey-lighter pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection