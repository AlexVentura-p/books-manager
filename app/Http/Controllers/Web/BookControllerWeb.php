<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookControllerWeb extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('welcome',[
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required','unique:books,title'],
            'author' => ['required'],
            'publication_year' => ['required','date_format:Y']
        ]);

        $book = Book::create($attributes);

        return redirect('/books');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('edit',[
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = request()->validate([
            'title' => ['required'],
            'author' => ['required'],
            'publication_year' => ['required','date_format:Y']
        ]);

        $book->update($data);

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/books');
    }
}
