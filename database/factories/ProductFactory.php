<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->title(),
            'price' => $this->faker->numberBetween(100, 200),
            'country' => $this->faker->country(),
//            'category_id' => $this->faker->numberBetween(1, 11),
            'sub_category_id' => $this->faker->text('40'),
            'photo' => $this->faker->text('255')
        ];
    }
}
