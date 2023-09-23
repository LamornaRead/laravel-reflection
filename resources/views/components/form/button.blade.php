@props(['name'])

<button {{ $attributes->merge(['class' => 'text-sm uppercase bg-orange-600 hover:bg-orange-700 text-white rounded mx-auto mt-3 py-2 text-base w-32']) }} 
    type="submit" 
    >{{ $name }}</button>