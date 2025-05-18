<x-layout>
    <x-slot:heading>{{ $book->title }}</x-slot:heading>

    <x-slot:body>
     
        <p class="m-5 text-xl text-gray-700">
            {{ $book->description ?? 'No description available.' }}
        </p>

        <div class="m-5 mt-8">
            <h3 class="text-2xl font-semibold text-gray-800">Author{{ $book->authors->count() > 1 ? 's' : '' }}:</h3>
            <ul class="list-disc ml-6 mt-2 text-xl text-blue-600">
                @forelse ($book->authors as $author)
                <li>
                    <a href="/authors/{{ $author->id }}" class="hover:underline">
                        {{ $author->name }}
                    </a>
                </li>
                @empty
                <li>No authors found.</li>
                @endforelse
            </ul>
        </div>
    </x-slot:body>
</x-layout>