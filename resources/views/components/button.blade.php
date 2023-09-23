@props(['name', 'link'])

<a {{ $attributes->merge(['class' => 'bg-orange-600 hover:bg-orange-700 text-white no-underline rounded text-center text-base py-2 px-3']) }}
     href="{!! $link !!}">{!! $name !!}</a>