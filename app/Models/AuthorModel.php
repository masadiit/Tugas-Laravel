<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthorModel extends Model 
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'Dee Lestari',
            'country' => 'Indonesia',
        ],
        [
            'id' => 2,
            'name' => 'J.K. Rowling',
            'country' => 'Inggris',
        ],
        [
            'id' => 3,
            'name' => 'Stephen King',
            'country' => 'Amerika Serikat',
        ],
        [
            'id' => 4,
            'name' => 'Agnes Jessica',
            'country' => 'Indonesia',
        ],
        [
            'id' => 5,
            'name' => 'Dan Brown',
            'country' => 'Amerika Serikat',
        ],
    ];

    public function getAuthors() {
        return $this->authors;
    }
}