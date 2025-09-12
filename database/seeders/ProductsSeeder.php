<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        // Get all categories
        $categories = Category::all();

        if ($categories->isEmpty()) {
            $this->command->info('No categories found. Please seed categories first.');
            return;
        }

        // Add fixed products dynamically assigning category_id
        Product::firstOrCreate(
            ['slug' => 'dell-xps-13'],
            [
                'name' => 'Dell XPS 13',
                'description' => 'Powerful laptop for programming and design.',
                'price' => 1500,
                'on_sale' => true,
                'image' => 'https://via.placeholder.com/640x480.png?text=Dell+XPS+13',
                'category_id' => $categories->random()->id, // pick a random category
            ]
        );

        Product::firstOrCreate(
            ['slug' => 'iphone-15-pro'],
            [
                'name' => 'iPhone 15 Pro',
                'description' => 'The latest iPhone model.',
                'price' => 1200,
                'on_sale' => false,
                'image' => 'https://via.placeholder.com/640x480.png?text=iPhone+15+Pro',
                'category_id' => $categories->random()->id, // pick a random category
            ]
        );

        // Generate random products using factory
        Product::factory()
            ->count(20)
            ->make()
            ->each(function ($product) use ($categories) {
                $product->category_id = $categories->random()->id;
                $product->save();
            });
    }
}
