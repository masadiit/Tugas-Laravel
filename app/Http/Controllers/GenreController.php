<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class GenreController extends Controller
{
    // 1. Read All
    public function index() {
        $genres = Genre::all(); 
        return response()->json([
            'message' => 'Daftar genre berhasil diambil',
            'data' => $genres
        ], 200);
    }

    // 2. Create 
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100|unique:genres,name',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validasi gagal', 'errors' => $validator->errors()], 400);
        }

        $genre = Genre::create($request->all());

        return response()->json(['message' => 'Genre berhasil ditambahkan', 'data' => $genre], 201);
    }

    // 3. Read Single 
    public function show(Genre $genre) {
        return response()->json([
            'message' => 'Detail genre berhasil diambil',
            'data' => $genre
        ], 200);
    }

    // 4. Update 
    public function update(Request $request, Genre $genre) {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:100', Rule::unique('genres', 'name')->ignore($genre->id)],
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validasi gagal', 'errors' => $validator->errors()], 400);
        }

        $genre->update($request->all());

        return response()->json([
            'message' => 'Genre berhasil diperbarui',
            'data' => $genre
        ], 200);
    }

    // 5. Delete
    public function destroy(Genre $genre) {
        $genre->delete();

        return response()->json([
            'message' => 'Genre berhasil dihapus'
        ], 200);
    }
}