<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookWell</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>

    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img class="h-8 w-auto"
                            src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                            alt="BookWell">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="/" aria-current="page" :active="request()->is('/')">BookWell
                            </x-nav-link>

                            <x-nav-link href="/books" :active="request()->is('books')">
                                Books</x-nav-link>
                            <x-nav-link href="/authors" :active="request()->is('authors')">
                                Authors</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">
                                Contact</x-nav-link>
                            <x-nav-link href="/about" :active="request()->is('about')">
                                About</x-nav-link>
                            {{-- <x-nav-link href="/add" :active="request()->is('add')">
                                Add Book</x-nav-link> --}}
                        </div>
                    </div>
                </div>
                <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->

            </div>
        </div>
        </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/"
                    class="{{ request()->is('/') ? 'block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-blue-400' : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}"
                    aria-current="page">BookWell</a>

                <a href="/books"
                    class="{{ request()->is('books') ? 'block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-blue-400' : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Books</a>

                <a href="/authors"
                    class="{{ request()->is('authors') ? 'block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-blue-400' : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Authors</a>

                <a href="/contact"
                    class="{{ request()->is('contact') ? 'block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-blue-400' : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Contact</a>

                <a href="/about"
                    class="{{ request()->is('about') ? 'block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-blue-400' : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    About</a>
                {{-- <a href="/add"
                    class="{{ request()->is('add') ? 'block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-blue-400' : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Add Book</a> --}}

            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div
        class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
        <div class="absolute top-1/2 left-[max(-7rem,calc(50%-52rem))] -z-10 -translate-y-1/2 transform-gpu blur-2xl"
            aria-hidden="true">
            <div class="aspect-577/310 w-144.25 bg-linear-to-r from-[#ff80b5] to-[#9089fc] opacity-30"
                style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)">
            </div>
        </div>
        <div class="absolute top-1/2 left-[max(45rem,calc(50%+8rem))] -z-10 -translate-y-1/2 transform-gpu blur-2xl"
            aria-hidden="true">
            <div class="aspect-577/310 w-144.25 bg-linear-to-r from-[#ff80b5] to-[#9089fc] opacity-30"
                style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)">
            </div>
        </div>
        <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
            <p class="text-sm/6 text-gray-900">
                <strong class="font-semibold">BookCon 2025</strong><svg viewBox="0 0 2 2"
                    class="mx-2 inline size-0.5 fill-current" aria-hidden="true">
                    <circle cx="1" cy="1" r="1" />
                </svg>Join us in Mumbai from June 7 – 9 to see what’s coming next.
            </p>
            <a href="#"
                class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-xs hover:bg-gray-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Register
                now <span aria-hidden="true">&rarr;</span></a>
        </div>
        {{-- <div class="flex flex-1 justify-end">
            <button type="button" class="-m-3 p-3 focus-visible:-outline-offset-4">
                <span class="sr-only">Dismiss</span>
                <svg class="size-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                    data-slot="icon">
                    <path
                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                </svg>
            </button>
        </div> --}}
    </div>

    <h3
        class="ml-3 mt-3 mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-4xl dark:text-white">
        <span
            class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">{{$heading}}
        </span>
    </h3>

    <main class="min-h-[80vh]">
    {{$body}}
    </main>


    <!-- Footer -->
    <footer class="bg-black shadow-sm dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href=""
                    class="hover:underline">BookWell</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="/books" class="hover:underline me-4 md:me-6">Books</a>
                </li>
                <li>
                    <a href="/authors" class="hover:underline me-4 md:me-6">Authors</a>
                </li>

                <li>
                    <a href="/privacypolicy" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="/contact" class="hover:underline me-4 md:me-6">Contact</a>
                </li>
                <li>
                    <a href="/about" class="hover:underline me-4 md:me-6">About</a>
                </li>
            </ul>
        </div>
    </footer>

</body>

</html>