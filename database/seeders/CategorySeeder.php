<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Blockchain',
            'slug' => 'blockchain',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'yellow'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'purple'
        ]);
    }
}
