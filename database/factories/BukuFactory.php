<?php

namespace Database\Factories;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'penulis' => fake()->name(),
            'judul' => fake()->sentence(),
            'deskripsi' => fake()->paragraphs(3,true),
            'penerbit' => fake()->name(),
            'harga' => fake()->numberBetween(10000, 200000)
        ];
    }
}
