<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::insert([
            [
                'title' => 'About Me',
                'description' => 'Consectetur adipisicing elit. Laborum, magni libero similique, laboriosam, delectus reiciendis minima minus dolorem sit fuga rerum atque vel quaerat ipsum perspiciatis neque maxime recusandae fugit um dolor sit amet, consectetur adipisicing elit. Laborum, magni libero similique, laboriosam, delectus reiciendis minima minus dolorem sit fuga rerum atque vel quaerat ipsum perspiciatis neque maxime recusandae fugit.',
                'image' => 'uploads/about-image.png',
                'resume' => 'uploads/resume.pdf',
            ]
        ]);
    }
}
