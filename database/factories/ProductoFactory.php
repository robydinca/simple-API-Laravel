<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'clase' => $this->faker->randomElement(['tornillería', 'herramientas', 'cocina', 'otros']),
            'proveedor' => $this->faker->company,
            'precio' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
