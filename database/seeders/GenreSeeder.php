<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('genres')->insert([
            ['name' => 'Fiksi Ilmiah', 'description' => 'Cerita masa depan dan teknologi.'],
            ['name' => 'Fantasi', 'description' => 'Cerita magis dan dunia khayalan.'],
            ['name' => 'Filosofi', 'description' => 'Studi tentang masalah mendasar.'],
            ['name' => 'Thriller', 'description' => 'Ketegangan dan plot yang cepat.'],
            ['name' => 'Edukasi', 'description' => 'Buku yang bertujuan untuk mendidik.'],
        ]);
    }
}