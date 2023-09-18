@props(['id', 'name', 'type'])

<input {{ $attributes->merge(['class' => 'border-solid border-1 border-gray-500 rounded outline-none h-8 pl-2 mb-1']) }} name="{{ $name }}" type="{{ $type }}">
<style>
    input:focus {
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        border: 1px solid rgba(81, 203, 238, 1);
    }
</style>