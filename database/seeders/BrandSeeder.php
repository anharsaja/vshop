<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'Dior',
        ]);
        Brand::create([
            'name' => 'Clarins',
        ]);
        Brand::create([
            'name' => 'Peau',
        ]);
        Brand::create([
            'name' => 'La Mer',
        ]);

    }
}
