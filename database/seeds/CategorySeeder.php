<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'health', 'entertainment', 'events', 'financial', 'sports', 'community', 'fiction', 'food', 'inspiration'
        ];

        foreach($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
