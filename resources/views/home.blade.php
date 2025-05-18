<x-layout>
    <x-slot:heading>
        <!-- Optional heading, can leave empty or add site tagline -->
    </x-slot:heading>

    <x-slot:body>
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
                alt="Books and reading" class="absolute inset-0 -z-10 w-full h-full object-cover object-center">

            <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center text-white">
                <h1 class="text-6xl font-extrabold tracking-tight sm:text-8xl">
                    Welcome to <span class="text-blue-400">BookWell</span>
                </h1>
                <p class="mt-4 text-4xl font-semibold sm:text-6xl">
                    Your Ultimate Book Management System
                </p>
                <p class="mt-8 max-w-3xl mx-auto text-lg sm:text-xl text-gray-300 leading-relaxed">
                    Effortlessly discover, organize, and manage your books and authors. Dive into new reads, track
                    your favorites, and enjoy a seamless literary experience all in one place.
                </p>
                <div class="mt-10 flex justify-center gap-x-6">
                    <a href="/books"
                        class="rounded-md bg-blue-600 px-6 py-3 text-lg font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Browse Books
                    </a>
                    <a href="/authors"
                        class="rounded-md bg-gray-700 px-6 py-3 text-lg font-semibold hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        Meet Authors
                    </a>
                </div>

                <dl class="mt-20 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 text-gray-300">
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-sm font-medium">Total Books</dt>
                        <dd class="text-4xl font-bold text-white">{{ $booksCount ?? '?' }}</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-sm font-medium">Authors</dt>
                        <dd class="text-4xl font-bold text-white">{{ $authorsCount ?? '?' }}</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-sm font-medium">Books & Authors Connected</dt>
                        <dd class="text-4xl font-bold text-white">{{ $relationsCount ?? '?' }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </x-slot:body>
</x-layout>