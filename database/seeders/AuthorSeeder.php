<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
  public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Tere Liye', 'country' => 'Indonesia'],
            ['name' => 'J.K. Rowling', 'country' => 'Inggris'],
            ['name' => 'Mark Manson', 'country' => 'AS'],
            ['name' => 'Andrea Hirata', 'country' => 'Indonesia'],
            ['name' => 'Stephen King', 'country' => 'AS'],
        ]);
    }
}