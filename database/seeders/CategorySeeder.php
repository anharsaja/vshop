<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Computer',
        ]);
        Category::create([
            'name' => 'Phone',
        ]);
        Category::create([
            'name' => 'Watch',
        ]);
    }
}
