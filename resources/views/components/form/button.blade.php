@props(['name'])

<button {{ $attributes->merge(['class' => 'text-sm uppercase bg-orange-600 hover:bg-orange-700 text-white rounded mx-auto mt-3 py-2 px-4 text-base']) }} 
    type="submit" 
    >{{ $name }}</button>