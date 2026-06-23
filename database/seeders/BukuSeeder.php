<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            Buku::create([
                'judul' => $faker->sentence,
                'penulis' => $faker->name,
                'penerbit' => $faker->name,
                'deskripsi' => $faker->paragraphs(3, true),
                'harga' => $faker->numberBetween(10000, 200000),
            ]);
        }
    }
}
