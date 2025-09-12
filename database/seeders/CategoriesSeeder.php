<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; 

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
      public function run(): void
    {
        // Option 1: fixed categories
        $categories = ['Laptops', 'Smartphones', 'Accessories', 'Home Appliances', 'Gaming'];
        foreach ($categories as $name) {
            Category::firstOrCreate([
                'name' => $name,
                'slug' => \Str::slug($name)
            ]);
        }
}
}
