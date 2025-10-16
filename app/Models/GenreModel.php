<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenreModel extends Model 
{
    private $genres = [
        [
            'id' => 1,
            'name' => 'Fiksi Ilmiah',
            'description' => 'Genre yang melibatkan konsep futuristik dan ilmiah.',
        ],
        [
            'id' => 2,
            'name' => 'Fantasi',
            'description' => 'Genre yang melibatkan sihir, makhluk mitologi, dan dunia rekaan.',
        ],
        [
            'id' => 3,
            'name' => 'Misteri',
            'description' => 'Genre yang berfokus pada pemecahan teka-teki atau kejahatan.',
        ],
        [
            'id' => 4,
            'name' => 'Romance',
            'description' => 'Genre yang berfokus pada hubungan emosional dan cinta.',
        ],
        [
            'id' => 5,
            'name' => 'Horor',
            'description' => 'Genre yang bertujuan untuk menimbulkan rasa takut dan kecemasan.',
        ],
    ];

    public function getGenres() {
        return $this->genres;
    }
}