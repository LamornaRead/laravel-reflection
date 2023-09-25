@props(['name'])

<button {{ $attributes->merge(['class' => 'uppercase bg-orange-600 hover:bg-orange-700 text-white rounded mx-auto py-2 px-4']) }} 
    type="submit" 
    >{{ $name }}</button>