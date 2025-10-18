<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule; // Import Rule untuk validasi unique

class BookController extends Controller
{
    // 1. Read All (GET: /api/books)
    public function index() {
        // Ambil semua buku DENGAN data relasi Author dan Genre
        $books = Book::with(['author', 'genre'])->get();
        
        return response()->json([
            'message' => 'Daftar buku berhasil diambil',
            'data' => $books
        ], 200);
    }

    // 2. Create (POST: /api/books)
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            // Title unik
            'title' => 'required|string|max:255|unique:books,title', 
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            // Pastikan ID Author dan Genre ada di tabel masing-masing
            'author_id' => 'required|exists:authors,id', 
            'genre_id' => 'required|exists:genres,id', 
            'cover_photo' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validasi gagal', 'errors' => $validator->errors()], 400);
        }

        $book = Book::create($request->all());

        // Muat ulang dengan relasi untuk respon
        $book->load(['author', 'genre']);

        return response()->json(['message' => 'Buku berhasil ditambahkan', 'data' => $book], 201);
    }

    // 3. Read Single (GET: /api/books/{book})
    public function show(Book $book) {
        // Muat data relasi sebelum merespon
        $book->load(['author', 'genre']);
        
        return response()->json([
            'message' => 'Detail buku berhasil diambil',
            'data' => $book
        ], 200);
    }

    // 4. Update (PUT/PATCH: /api/books/{book})
    public function update(Request $request, Book $book) {
        $validator = Validator::make($request->all(), [
            // Title unik, kecuali title buku saat ini
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('books', 'title')->ignore($book->id),
            ],
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'author_id' => 'required|exists:authors,id', 
            'genre_id' => 'required|exists:genres,id', 
            'cover_photo' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validasi gagal', 'errors' => $validator->errors()], 400);
        }

        $book->update($request->all());

        // Muat ulang dengan relasi untuk respon
        $book->load(['author', 'genre']);

        return response()->json(['message' => 'Buku berhasil diperbarui', 'data' => $book], 200);
    }

    // 5. Delete (DELETE: /api/books/{book})
    public function destroy(Book $book) {
        $book->delete();

        return response()->json(['message' => 'Buku berhasil dihapus'], 200);
    }
}