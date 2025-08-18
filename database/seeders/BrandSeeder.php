<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::insert([
            [
                'name' => 'Coca-Cola',
                'img' => 'brands/coca_cola.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pepsi',
                'img' => 'brands/pepsi.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sprite',
                'img' => 'brands/sprite.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
