<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reivew;
use App\Models\Product; 
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {

        $product = Product::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        return [
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->optional()->paragraph(),
            'product_id' => $product ? $product->id : Product::factory(),
            'user_id' => $user ? $user->id : User::factory(),
        ];
    }
}
