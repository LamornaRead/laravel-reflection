@props(['name'])

<h1 {{ $attributes->merge(['class' => 'text-xl md:text-3xl text-center mt-6 mb-16']) }}>{!! $name !!}</h1>
