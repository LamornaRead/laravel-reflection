@props(['name', 'link'])

<a {{ $attributes->merge(['class' => 'bg-orange-600 hover:bg-orange-700 text-white no-underline p-2 rounded text-center']) }}
     href="{!! $link !!}">{!! $name !!}</a>