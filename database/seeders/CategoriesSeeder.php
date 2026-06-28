<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected array $categories = [
        'All',
        'Entertainment',
        'Music',
        'Gaming',
        'Education',
        'Technology',
        'News',
        'Sports',
        'Movies',
        'TV Shows',
        'Comedy',
        'Travel',
        'Food',
        'Health & Fitness',
        'Fashion',
        'Beauty',
        'Science',
        'Business',
        'Lifestyle',
        'Motivation',
        'Pets & Animals',
    ];
    public function run(): void
    {
        foreach ($this->categories as $category) {
            Categories::create([
                'name' => $category,
            ]);
        }
    }
}
