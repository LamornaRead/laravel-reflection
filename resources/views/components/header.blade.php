@props(['name'])

<h1 {{ $attributes->merge(['class' => 'text-center mt-6 mb-16']) }}>{!! $name !!}</h1>
