<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;

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
