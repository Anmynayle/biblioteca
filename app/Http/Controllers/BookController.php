<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::with('category');

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        return response()->json($query->get());
    }

    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->validated());
        $book->load('category');

        return response()->json($book, 201);
    }

    public function show(Book $book)
    {
        $book->load('category');
        return response()->json($book);
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());
        $book->load('category');

        return response()->json($book);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json([
            'message' => 'Libro eliminado correctamente'
        ]);
    }
}