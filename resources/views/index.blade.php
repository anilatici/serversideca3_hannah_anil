@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-4xl uppercase font-bold text-shadow-md pb-14">
                    <span style="background-color: dimgray; display: inline-block; padding: 10px 20px; border-radius: 8px; font-size: 3.5rem;">Welcome to Delicious Recipes!</span>
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Explore Recipes
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/07/16/10/43/recipe-2508859_960_720.jpg" width="700" alt="Delicious Recipes">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Discover Mouthwatering Recipes
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Explore a wide variety of recipes from around the world. From appetizers to desserts, we have it all!
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Whether you're a seasoned chef or just starting out, our collection of recipes will satisfy your taste buds.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Get Cooking Now
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            Popular Recipe Categories
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Breakfast & Brunch
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Main Dishes
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Desserts
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Healthy Options
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Latest Recipes
        </span>

        <h2 class="text-4xl font-bold py-10">
            Try Something New
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Looking for inspiration? Check out our latest recipes created by top chefs and food enthusiasts.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Lasagna
                </span>

                <h3 class="text-xl font-bold py-10">
                    Layers of fresh pasta, tasty ragu and smooth cream sauce as the tradition teaches. Indulge in this Italian favourite every time you want!
                </h3>

                <a 
                    href="/blog/1"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    View Recipe
                </a>
            </div>
        </div>
        <div>
            <img src="https://www.modernhoney.com/wp-content/uploads/2019/08/Classic-Lasagna-14-scaled.jpg" alt="Lasagna">
        </div>
    </div>
@endsection
