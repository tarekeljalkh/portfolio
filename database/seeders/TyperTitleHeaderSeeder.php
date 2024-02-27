<?php

namespace Database\Seeders;

use App\Models\TyperTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TyperTitleHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TyperTitle::insert([
            [
                'title' => "I can create awesome stuff.",
            ],
            [
                'title' => "I'm ui/ux designer.",
            ],
            [
                'title' => "Let's work together.",
            ]
        ]);
    }
}
