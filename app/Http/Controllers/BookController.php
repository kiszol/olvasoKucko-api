<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /* GET /api/books – Listázza az összes könyvet.*/
    public function index()
    {
        return response()->json(Book::with('loans')->get());  
    }

    /* GET /api/books/{query} – Listázza a query-nek megfelelő íróval vagy címmel rendelkező könyveket!*/
    public function search($query)
    {
        $books = Book::where('title', 'like', "%$query%")
                     ->orWhere('author', 'like', "%$query%")
                     ->get();
        return response()->json($books, 200);
    }

    /**/
    public function show(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
