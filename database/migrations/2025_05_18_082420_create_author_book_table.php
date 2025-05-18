<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('author_book', function (Blueprint $table) {
            $table->foreignIdFor(App\Models\Author::class, 'author_id')->constrained()->onDelete('cascade');
            $table->foreignId(App\Models\Book::class, 'book_id')->constrained()->onDelete('cascade');
            $table->primary(['author_id', 'book_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('author_book');
    }
};