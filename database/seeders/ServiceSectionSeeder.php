<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'name' => 'Branding Design',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.',
            ],
            [
                'name' => 'User Interface',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.',
            ],
            [
                'name' => 'User Experience',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.',
            ]
        ]);
    }
}
