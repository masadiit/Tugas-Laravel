<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void 
    {
        Book::create([
            'title' => 'Bumi',
            'description' => 'Petualangan Raib, Seli, dan Ali di dunia paralel.',
            'price' => 99000,
            'stock' => 50,
            'genre_id' => 3,
            'author_id' => 1, 
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif anak-anak dari Belitung.',
            'price' => 85000,
            'stock' => 45,
            'genre_id' => 2,
            'author_id' => 3, 
        ]);

        Book::create([
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'Awal mula kisah penyihir muda di Hogwarts.',
            'price' => 125000,
            'stock' => 30,
            'genre_id' => 3, 
            'author_id' => 2, 
        ]);

        Book::create([
            'title' => 'Perahu Kertas',
            'description' => 'Kisah cinta Keenan dan Kugy yang penuh lika-liku.',
            'price' => 78000,
            'stock' => 60,
            'genre_id' => 2, 
            'author_id' => 5, 
        ]);

        Book::create([
            'title' => 'Bumi Manusia',
            'description' => 'Kisah Minke di zaman kolonial Hindia Belanda.',
            'price' => 110000,
            'stock' => 25,
            'genre_id' => 1,
            'author_id' => 4, 
        ]);
    } 
}