@props(['for', 'name'])

<label {{ $attributes->merge(['class' => 'text-base mt-1']) }} for="{{ $for }}">{{ $name }}</label>