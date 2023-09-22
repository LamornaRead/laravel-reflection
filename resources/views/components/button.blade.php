@props(['name', 'link'])

<a {{ $attributes->merge(['class' => 'bg-orange-600 hover:bg-orange-700 text-white no-underline rounded text-center']) }}
     href="{!! $link !!}">{!! $name !!}</a>