<x-layout>
    <x-slot:heading>{{ $author->name }}</x-slot:heading>

    <x-slot:body>
        <p class="m-5 text-2xl text-gray-700">
            {{ $author->bio ?? 'No bio available.' }}
        </p>

        @if ($author->books->isNotEmpty())
        <h2 class="text-xl font-semibold mt-6 ml-5">Books by {{ $author->name }}:</h2>
        <ul class="list-disc ml-10 mt-2">
            @foreach ($author->books as $book)
            <li>
                <a href="/books/{{ $book->id }}" class="text-blue-500 hover:underline">
                    {{ $book->title }}
                </a>
            </li>
            @endforeach
        </ul>
        @else
        <p class="ml-5 mt-4 text-gray-500">This author has not written any books yet.</p>
        @endif
    </x-slot:body>
</x-layout>