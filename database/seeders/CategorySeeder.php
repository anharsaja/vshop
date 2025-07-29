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
            'name' => 'Perfume',
        ]);
        Category::create([
            'name' => 'Lotion',
        ]);
        Category::create([
            'name' => 'Sun Screen',
        ]);
        Category::create([
            'name' => 'Hair Tonic',
        ]);
    }
}
