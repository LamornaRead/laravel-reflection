@props(['for'])
<label {{ $attributes->merge(['class' => 'text-base mt-1']) }} for="{{ $for }}">{!! $slot !!}</label>