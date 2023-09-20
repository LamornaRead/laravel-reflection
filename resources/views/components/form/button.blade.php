@props(['name'])

<input {{ $attributes->merge(['class' => 'text-sm uppercase bg-orange-600 hover:bg-orange-700 text-white py-2 w-20 rounded mx-auto mt-3']) }} 
type="submit" 
value="{{ $name }}"
>