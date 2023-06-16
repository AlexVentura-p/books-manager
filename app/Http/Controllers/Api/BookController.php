<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return response($books);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $data = request()->validate([
            'title' => ['required','unique:books,title'],
            'author' => ['required'],
            'publication_year' => ['required','date_format:Y']
        ]);

        $book = Book::create($data);

        return response($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return response($book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Book $book)
    {
        $data = request()->validate([
            'title' => ['required','unique:books,title'],
            'author' => ['required'],
            'publication_year' => ['required','date_format:Y']
        ]);

        $book->update($data);

        return response($book);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete($book);

        return response('No content', 204);
    }
}
