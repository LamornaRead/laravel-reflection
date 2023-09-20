@props(['name'])

<select {{ $attributes->merge(['class' => 'border-solid border-1 border-gray-500 rounded outline-none h-8 pl-2 my-2 h-10']) }} name="{{ $name }}" id="{{ $name }}" required>{{ $slot }}</select>