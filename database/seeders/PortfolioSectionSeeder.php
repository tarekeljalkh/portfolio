<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::insert([
            [
                'title' => '9 Things I Love About Shaving My Head During.',
                'image' => '/uploads/portfolio.jpg',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.',
                'client' => 'SquareSparc Ltd.',
                'website' => 'www.fooleo.com.uk',
            ],
            [
                'title' => '9 Things I Love About Shaving My Head During.',
                'image' => '/uploads/portfolio.jpg',
                'category_id' => '2',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.',
                'client' => 'SquareSparc Ltd.',
                'website' => 'www.fooleo.com.uk',
            ],
            [
                'title' => '9 Things I Love About Shaving My Head During.',
                'image' => '/uploads/portfolio.jpg',
                'category_id' => '3',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.',
                'client' => 'SquareSparc Ltd.',
                'website' => 'www.fooleo.com.uk',
            ],
            [
                'title' => '9 Things I Love About Shaving My Head During.',
                'image' => '/uploads/portfolio.jpg',
                'category_id' => '4',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.',
                'client' => 'SquareSparc Ltd.',
                'website' => 'www.fooleo.com.uk',
            ],
            [
                'title' => '9 Things I Love About Shaving My Head During.',
                'image' => '/uploads/portfolio.jpg',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.',
                'client' => 'SquareSparc Ltd.',
                'website' => 'www.fooleo.com.uk',
            ],
            [
                'title' => '9 Things I Love About Shaving My Head During.',
                'image' => '/uploads/portfolio.jpg',
                'category_id' => '2',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.',
                'client' => 'SquareSparc Ltd.',
                'website' => 'www.fooleo.com.uk',
            ],
        ]);
    }
}
