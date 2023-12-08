<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        for($i = 0; $i < 10; $i++) {
            Product::create([
                'nama_produks' => $faker->word(),
                'harga_produks' => $faker->randomDigit(7),
                'stok_produks' => $faker->randomDigit(),
                'foto_produks' => $faker->word().".jpg",
            ]);
        }
    }
}
