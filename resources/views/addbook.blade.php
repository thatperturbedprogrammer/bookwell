<x-layout>
    <x-slot:heading>Add a Book</x-slot:heading>
    <x-slot:body>
<form action="/books/create" method="POST" class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow-md mt-10">
    @csrf

    <h2 class="text-2xl font-bold mb-6 text-gray-800">Add a New Book and Author</h2>

    <!-- Book Title -->
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Book Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}"
               class="mt-1 p-4 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
               placeholder="Enter book title">
        @error('title')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Book Description -->
<div class="mb-4">
    <label for="description" class="block text-sm font-medium text-gray-700">Book Description</label>
    <textarea name="description" id="description" rows="4"
              class="mt-1 p-4 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
              placeholder="Write a short description about the book">{{ old('description') }}</textarea>
    @error('description')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
    @enderror
</div>


    <!-- Book Published -->
    <div class="mb-4">
        <label for="published_at" class="block text-sm font-medium text-gray-700">Date of Publication</label>
        <input type="text" name="published_at" id="published_at" value="{{ old('title') }}"
               class="mt-1 p-4 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
               placeholder="e.g. 1880">
        @error('title')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Author Name -->
    <div class="mb-4">
        <label for="author_name" class="block text-sm font-medium text-gray-700">Author Name</label>
        <input type="text" name="author_name" id="author_name" value="{{ old('author_name') }}"
               class="mt-1 p-4 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
               placeholder="Enter author's full name">
        @error('author_name')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Author Bio (Optional) -->
    <div class="mb-6">
        <label for="author_bio" class="block text-sm font-medium text-gray-700">Author Bio</label>
        <textarea name="author_bio" id="author_bio" rows="3"
                  class="mt-1 p-4 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                  placeholder="Short bio of the author">{{ old('author_bio') }}</textarea>
        @error('author_bio')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
        <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:cursor-pointer hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Save Book & Author
        </button>
    </div>

    </div>
</form>


    </x-slot:body>

</x-layout>