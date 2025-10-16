<?php

namespace App\Http\Controllers;

use App\Models\AuthorModel; // Import Model Author Anda
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $data = new AuthorModel(); 
        $authors = $data->getAuthors(); 
        
        return view('author', ['authors' => $authors]); 
    }
}