<x-layout>
    <x-slot:heading>Books</x-slot:heading>
    <x-slot:body>
        <div class="flex flex-wrap gap-8 p-4 m-4">
            <!-- Books Section -->
            <div class="w-full md:w-1/2">

                <ul class="p-2 space-y-6">
                    @foreach ($books as $book)
                    <li class="border p-4 rounded shadow">
                        <a href="/books/{{ $book->id }}">
                            <strong class="text-3xl text-blue-600 hover:underline">
                                {{ $book->title }}
                            </strong>
                            <p class="text-gray-700 mt-2">{{ $book->description }}</p>
                        </a>

                        <p class="text-2xl mt-4 font-semibold">Author{{ $book->authors->count() > 1 ? 's' : '' }}:</p>
                        <ul class="list-disc ml-6 text-lg text-gray-800">
                            @forelse ($book->authors as $author)
                            <li>
                                <a href="/authors/{{ $author->id }}" class="text-blue-600 hover:underline">
                                    {{ $author->name }}
                                </a>
                            </li>
                            @empty
                            <li>No authors listed</li>
                            @endforelse
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    <div class="m-5 p-5">{{$books->links()}}</div>
    
    </x-slot:body>
</x-layout>