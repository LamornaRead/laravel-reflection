@props(['name'])

<h1 {{ $attributes->merge(['class' => 'text-xl md:text-3xl text-center']) }}>{!! $name !!}</h1>
