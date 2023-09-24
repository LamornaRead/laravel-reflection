@props(['active' => false])

@php
    $class = 'block py-1 no-underline text-gray-900 hover:bg-orange-600 hover:text-white focus:bg-orange-600 focus:text-white pl-2';
    if($active) {
        $class .= ' bg-orange-600 text-white';
    }
@endphp
<a {{ $attributes->merge(['class' => $class ]) }}>
{{ $slot }}</a>