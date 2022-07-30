<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->title,
            "descr" => $this->faker->text(25),
            "price" => $this->faker->numberBetween(5000, 1000000),
            "img" => "./img/logo.png",
            "category" => $this->faker->randomElement(['home', 'sport', 'cars', 'electronics', 'dresses', 'pets']),
            "count_purchses" => $this->faker->numberBetween(1, 10000),
            "likes" => $this->faker->numberBetween(1, 1260),
        ];
    }
}
