 @props(['name', 'id'])
<select {{ $attributes->merge(['class' => 'border-solid border-1 border-gray-500 rounded outline-none h-8 pl-2 mb-1']) }} name="{{ $name }}" id="{{ $id }}">{{ $slot }}</select>
