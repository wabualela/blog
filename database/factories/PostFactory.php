<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->monthName(),
            'slug'  => $this->faker->slug(),
            'body'  => $this->faker->realText(1000),
            'category_id' => Category::factory(),
        ];
    }
}
