<x-layout>
    <x-slot:heading>Books Dashboard</x-slot:heading>
    <x-slot:body>
        <div class="flex flex-wrap md:flex-nowrap gap-8 p-4">

            <!-- Authors Section -->
            <div class="w-full md:w-1/2">
                <h2 class="text-4xl font-bold mb-4">Authors</h2>

                @foreach($authors as $author)
                <div class="mb-6 border rounded shadow p-4">
                    <a href="/authors/{{ $author->id }}">
                        <h3 class="text-2xl text-blue-600 hover:underline font-semibold">{{ $author->name }}</h3>
                    </a>
                    <p class="text-gray-700">{{ $author->bio }}</p>

                    <h4 class="mt-3 font-semibold">Books by this author:</h4>
                    <ul class="list-disc ml-6 text-gray-800">
                        @forelse($author->books as $book)
                        <li>
                            <a href="/books/{{ $book->id }}"
                                class="text-blue-500 hover:underline">{{ $book->title }}</a>
                        </li>
                        @empty
                        <li>No books found</li>
                        @endforelse
                    </ul>
                </div>
                @endforeach
         <div class="m-5 p-5">{{$authors->links()}}</div>
            
            </div>

            <!-- Books Section -->
            <div class="w-full md:w-1/2">
                <h2 class="text-4xl font-bold mb-4">Books</h2>

                @foreach($books as $book)
                <div class="mb-6 border rounded shadow p-4">
                    <a href="/books/{{ $book->id }}">
                        <h3 class="text-2xl text-blue-600 hover:underline font-semibold">{{ $book->title }}</h3>
                    </a>
                    <p class="text-gray-700">{{ $book->description ?? 'No description' }}</p>

                    <h4 class="mt-3 font-semibold">Authors:</h4>
                    <ul class="list-disc ml-6 text-gray-800">
                        @forelse($book->authors as $author)
                        <li>
                            <a href="/authors/{{ $author->id }}"
                                class="text-blue-500 hover:underline">{{ $author->name }}</a>
                        </li>
                        @empty
                        <li>No authors found</li>
                        @endforelse
                    </ul>
                </div>
                @endforeach
            <div class="m-5 p-5">{{$books->links()}}</div>
            
            </div>
        </div>

    </x-slot:body>
</x-layout>