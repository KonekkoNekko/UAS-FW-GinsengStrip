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
            'product_album' => 'April Skies',
            'product_artist' => 'Jesus Mary Chain',
            'product_price' => 200000,
            'original_filename' => 'april skies - jesus mary chain (remove bg).png',
        ]);
        Product::create([
            'product_album' => 'Countdown to Extinction',
            'product_artist' => 'Megadeth',
            'product_price' => 200000,
            'original_filename' => 'countdown to extinction - megadeth (remove bg).png',
        ]);
        Product::create([
            'product_album' => 'In Utero',
            'product_artist' => 'Nirvana',
            'product_price' => 200000,
            'original_filename' => 'in utero - nirvana (remove bg).png',
        ]);
        Product::create([
            'product_album' => 'Jurang Pemisah',
            'product_artist' => 'Yockie',
            'product_price' => 200000,
            'original_filename' => 'jurang pemisah - yockie (remove bg).png',
        ]);
        Product::create([
            'product_album' => 'Pablo Honey',
            'product_artist' => 'Radiohead',
            'product_price' => 200000,
            'original_filename' => 'pablo honey - radiohead (remove bg).png',
        ]);

        //Factory
        Product::factory()->count(55)->create();
    }
}
