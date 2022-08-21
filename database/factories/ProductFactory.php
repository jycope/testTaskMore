<?php


namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categoryId = mb_str_split(Category::first()->id)[0];

        return [
            'price' => $this->faker->numberBetween(100, 500),
            'name' => $this->faker->name(),
            'img' => $this->faker->image(),
            'description' => $this->faker->text(),
            'category_id' => $categoryId
        ];
    }
}