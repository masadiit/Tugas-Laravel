<?php

namespace App\Http\Controllers;

use App\Models\GenreModel; 
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {
        $data = new GenreModel(); 
        
        $genres = $data->getGenres(); 
        
        return view('genres', ['genres' => $genres]); 
    }
}