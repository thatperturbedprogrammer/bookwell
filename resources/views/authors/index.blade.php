<x-layout>
    <x-slot:heading>Authors</x-slot:heading>
    <x-slot:body>
        <div class="flex flex-wrap gap-8 p-5 m-5">
            <!-- Authors Section -->
            <div class="w-full md:w-1/2">

                @foreach($authors as $author)
                <div class="mb-6 border rounded shadow p-4">
                    <a href="/authors/{{ $author->id }}">
                        <strong class="text-2xl text-blue-600 hover:underline">{{ $author->name }}</strong>
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
            </div>
        </div>
           
        <div class="m-5 p-5">{{$authors->links()}}</div>
    
    </x-slot:body>
</x-layout>