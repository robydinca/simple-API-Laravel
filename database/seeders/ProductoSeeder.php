<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use Database\Factories\ProductoFactory;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.qef
     */
    public function run(): void
    {
        Producto::factory(50)->create();

    }
}