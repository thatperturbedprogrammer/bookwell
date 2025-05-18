<!-- <a href="/{{\Illuminate\Support\Str::lower($slot) }}">{{ $slot }}</a> -->
@props(['active' => false])

<a class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-blue-400' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white'}}"
    {{$attributes}}>{{ $slot }}</a>