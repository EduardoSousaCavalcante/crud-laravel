<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Notebook XYZ',
            'description' => 'Notebook para uso diário, 8GB RAM, 256GB SSD.',
            'price' => 2599.90,
            'quantity' => 10,
        ]);

        Product::create([
            'name' => 'Mouse Sem Fio',
            'description' => 'Mouse ergonômico com bateria de longa duração.',
            'price' => 79.90,
            'quantity' => 50,
        ]);

        Product::create([
            'name' => 'Teclado Mecânico',
            'description' => 'Teclado mecânico RGB, switches azuis.',
            'price' => 349.00,
            'quantity' => 20,
        ]);
    }
}
