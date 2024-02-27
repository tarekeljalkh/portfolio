<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Header::insert([
                'title' => 'Hi, I am Smith Jhon',
                'sub_title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque at, aperiam corrupti earum quasi, porro voluptatem commodi eos laboriosam nam quis nostrum, molestiae nesciunt dolore.',
                'button_text' => 'Hire Me',
                'button_url' => '#',
                'image' => 'uploads/header.jpg',
        ]);
    }
}
