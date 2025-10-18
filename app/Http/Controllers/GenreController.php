<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index() {
        $genres = Genre::all(); 
        return response()->json([
            'message' => 'Daftar genre berhasil diambil',
            'data' => $genres
        ], 200);
    }

    public function store(Request $request) {
        // 1. Validasi Data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100|unique:genres,name', 
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 400);
        }

        // 2. Simpan Data ke Database
        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // 3. Respon Sukses
        return response()->json([
            'message' => 'Genre berhasil ditambahkan',
            'data' => $genre
        ], 201); 
    }
}