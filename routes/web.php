<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Author;

// Static Pages
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/', function () {
    return view('home', [
        'booksCount' => Book::count(),
        'authorsCount' => Author::count(),
        'relationsCount' => \DB::table('author_book')->count(),
    ]);
});

// Book List Page (Read All)
Route::get('/books', function () {
    $books = Book::with('authors')->paginate(5);
    return view('books', compact('books'));
});

// Book Detail Page (Read One)
Route::get('/books/{id}', function ($id) {
    $book = Book::with('authors')->findOrFail($id); // Eager load 
    return view('book', compact('book'));
});

// Authors List Page (Read All)
Route::get('/authors', function () {
    $authors = Author::with('books')->paginate(5);
    return view('authors', compact('authors'));
});

// Author Detail Page (Read One)
Route::get('/authors/{id}', function ($id) {
    $author = Author::with('books')->findOrFail($id); // Eager load 
    return view('author', compact('author'));
});


// Dashboard - All Authors with their Books
Route::get('/dashboard', function () {
    $authors = \App\Models\Author::with('books')->get();
    $books = \App\Models\Book::with('authors')->get();
    return view('dashboard', compact('authors', 'books'));
});

Route::get("/add", function(){
    return view('addbook');
});