@props(['active' => false])

@php
    $class = 'text-xs lg:text-sm no-underline uppercase text-orange-600';
    if($active) {
        $class .= ' text-white';
    }
@endphp

<li class="md:mb-3">
    <a {{ $attributes->merge(['class' => $class ]) }}>{{ $slot }}</a>
</li>
