<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Non voluptate proident est et.',
            'price' => 19.03,
            'quantity' => 3,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'Aliquip mollit voluptate velit in occaecat nisi consectetur sit id non. Ad ullamco veniam magna nostrud dolore officia laboris aliquip irure. Lorem labore incididunt officia enim irure ad quis fugiat ad irure laboris. Anim enim laboris anim sit esse reprehenderit qui magna cillum aliquip qui ad voluptate. Eiusmod laboris dolore non in cupidatat officia ea sint pariatur.'
        ]);
    }
}
