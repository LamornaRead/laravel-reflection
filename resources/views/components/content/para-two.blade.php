@props(['name'])

<p {{ $attributes->merge(['class' => '']) }}><strong class="text-orange-600">{{ $name }}</strong> {{ $slot }}</p>