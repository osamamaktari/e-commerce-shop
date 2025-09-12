<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Review;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(20)->create();

  $this->call([
        CategoriesSeeder::class,
        ProductsSeeder::class,
        ReviewsSeeder::class,
    ]);

        $this->call([
    // other seeders...
    ReviewsSeeder::class,
]);


    }


    }

