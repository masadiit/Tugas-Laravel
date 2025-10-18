<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class BookSeeder extends Seeder
{
    public function run(): void 
    {
        DB::table('books')->insert([
            ['title' => 'Bumi', 'description' => 'Fiksi tentang klan Matahari.', 'price' => 75000, 'stock' => 20, 'author_id' => 1, 'genre_id' => 2],
            ['title' => 'Harry Potter', 'description' => 'Awal kisah penyihir cilik.', 'price' => 120000, 'stock' => 15, 'author_id' => 2, 'genre_id' => 2],
            ['title' => 'Sebuah Seni Bodo Amat', 'description' => 'Melawan arus positivitas berlebihan.', 'price' => 60000, 'stock' => 30, 'author_id' => 3, 'genre_id' => 3],
            ['title' => 'Laskar Pelangi', 'description' => 'Kisah perjuangan 10 anak.', 'price' => 85000, 'stock' => 25, 'author_id' => 4, 'genre_id' => 5],
            ['title' => 'The Shining', 'description' => 'Kisah horor di Overlook Hotel.', 'price' => 100000, 'stock' => 10, 'author_id' => 5, 'genre_id' => 4],
        ]);
    } 
}