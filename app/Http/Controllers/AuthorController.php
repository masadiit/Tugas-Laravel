<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::all(); 
        return response()->json([
            'message' => 'Daftar penulis berhasil diambil',
            'data' => $authors
        ], 200);
    }
    
    // CREATE DATA (POST: /api/authors)
    public function store(Request $request) {
        // 1. Validasi Data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:150|unique:authors,name', 
            'country' => 'nullable|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 400);
        }

        // 2. Simpan Data ke Database
        $author = Author::create([
            'name' => $request->name,
            'country' => $request->country,
        ]);

        // 3. Respon Sukses
        return response()->json([
            'message' => 'Penulis berhasil ditambahkan',
            'data' => $author
        ], 201);
    }
}