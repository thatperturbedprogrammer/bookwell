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
    $books = Book::with('authors')->latest()->paginate(5);
    return view('books.index', compact('books'));
});


// Book Detail Page (Read One)
Route::get('/books/{id}', function ($id) {
    $book = Book::with('authors')->findOrFail($id); // Eager load 
    return view('books.show', compact('book'));
});

// Add Form View
Route::get("/add", function(){
    return view('addbook');
});

// POST - Create Book
Route::post('/books/create', function(){

    // Create Book
    $book = Book::create(['title' => request('title'), 'description' => request('description'), 'published_at' => request('published_at')]);
    
     // Find or create author
    $author = Author::firstOrCreate(['name' => request('author_name'), 'bio' => request('author_bio')]);

    // Attach author to book (pivot table)
    $book->authors()->attach($author->id);

    return redirect("/books");
});

// Authors List Page (Read All)
Route::get('/authors', function () {
    $authors = Author::with('books')->latest()->paginate(5);
    return view('authors.index', compact('authors'));
});

// Author Detail Page (Read One)
Route::get('/authors/{id}', function ($id) {
    $author = Author::with('books')->findOrFail($id); // Eager load 
    return view('authors.show', compact('author'));
});


// Dashboard - All Authors with their Books
Route::get('/dashboard', function () {
    $authors = \App\Models\Author::with('books')->get();
    $books = \App\Models\Book::with('authors')->get();
    return view('dashboard', compact('authors', 'books'));
});