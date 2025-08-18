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
        Product::insert([
            [
                'brand_id' => 1, // Coca-Cola
                'category_id' => 1, // Softdrinks
                'name' => 'Coca-Cola 1.5L',
                'description' => 'Refreshing softdrink',
                'price' => 65.00,
                'stock' => 100,
                'img' => 'products/coke_1_5l.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 2, // Pepsi
                'category_id' => 1, // Softdrinks
                'name' => 'Pepsi 1.5L',
                'description' => 'Classic Pepsi softdrink',
                'price' => 60.00,
                'stock' => 80,
                'img' => 'products/pepsi_1_5l.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 3, // Sprite
                'category_id' => 1, // Softdrinks
                'name' => 'Sprite 1.5L',
                'description' => 'Lemon-lime softdrink',
                'price' => 62.00,
                'stock' => 90,
                'img' => 'products/sprite_1_5l.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
