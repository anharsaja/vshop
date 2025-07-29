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
            'title' => 'Floral Essence Eau de Parfum',
            'price' => 45.00,
            'quantity' => 10,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'Parfum dengan aroma bunga yang lembut dan menyegarkan. Cocok untuk digunakan sepanjang hari agar tetap wangi dan percaya diri.'
        ]);

        // Lotion
        Product::create([
            'title' => 'HydraMoist Body Lotion',
            'price' => 22.50,
            'quantity' => 15,
            'category_id' => 2,
            'brand_id' => 2,
            'description' => 'Lotion pelembap dengan kandungan aloe vera dan vitamin E untuk menjaga kelembapan kulit sepanjang hari.'
        ]);

        // Sun Screen
        Product::create([
            'title' => 'SunShield SPF 50+ PA+++',
            'price' => 18.75,
            'quantity' => 8,
            'category_id' => 3,
            'brand_id' => 1,
            'description' => 'Sunscreen ringan dengan perlindungan tinggi terhadap sinar UVA dan UVB. Tidak lengket dan cepat meresap.'
        ]);

        // Hair Tonic
        Product::create([
            'title' => 'Revive Hair Tonic Herbal',
            'price' => 30.00,
            'quantity' => 6,
            'category_id' => 4,
            'brand_id' => 2,
            'description' => 'Hair tonic dengan ekstrak ginseng dan menthol untuk merangsang pertumbuhan rambut dan menyegarkan kulit kepala.'
        ]);
    }
}
