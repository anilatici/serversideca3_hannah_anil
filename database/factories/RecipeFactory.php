<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'recipe_name' => $this->faker->sentence(3),
            'recipe_description' => $this->faker->sentence(10),
            'recipe_ingredients' => $this->faker->sentence(10),
            'cuisine' => $this->faker->sentence(3),
            
        ];
    }
}
