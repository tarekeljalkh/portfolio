<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\map;

class CategorySectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Branding Design',
                'slug' => 'branding-design',
            ],
            [
                'name' => 'User Interface',
                'slug' => 'user-interface',
            ],
            [
                'name' => 'User Experience',
                'slug' => 'user-experience',
            ],
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
            ]
        ]);
    }
}
