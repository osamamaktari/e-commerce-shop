<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $users = User::all();

        if ($products->isEmpty() || $users->isEmpty()) {
            $this->command->info('Please ensure there are products and users before seeding reviews.');
            return;
        }


        foreach ($products as $product) {
            $count = rand(1, 5);
            Review::factory()->count($count)->create([
                'product_id' => $product->id,
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
