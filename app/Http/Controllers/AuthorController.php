<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthorController extends Controller
{
    // 1. Read All
    public function index() {
        $authors = Author::all(); 
        return response()->json([
            'message' => 'Daftar penulis berhasil diambil',
            'data' => $authors
        ], 200);
    }

    // 2. Create 
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:150|unique:authors,name',
            'country' => 'nullable|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validasi gagal', 'errors' => $validator->errors()], 400);
        }

        $author = Author::create($request->all());

        return response()->json(['message' => 'Penulis berhasil ditambahkan', 'data' => $author], 201);
    }

    // 3. Read Single 
    public function show(Author $author) {
        return response()->json([
            'message' => 'Detail penulis berhasil diambil',
            'data' => $author
        ], 200);
    }

    // 4. Update 
    public function update(Request $request, Author $author) {
        $validator = Validator::make($request->all(), [
            // Rule::unique memastikan nama unik, tetapi mengabaikan ID Author saat ini
            'name' => ['required', 'string', 'max:150', Rule::unique('authors', 'name')->ignore($author->id)],
            'country' => 'nullable|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validasi gagal', 'errors' => $validator->errors()], 400);
        }

        $author->update($request->all());

        return response()->json([
            'message' => 'Penulis berhasil diperbarui',
            'data' => $author
        ], 200);
    }

    // 5. Delete 
    public function destroy(Author $author) {
        $author->delete();

        return response()->json([
            'message' => 'Penulis berhasil dihapus'
        ], 200);
    }
}