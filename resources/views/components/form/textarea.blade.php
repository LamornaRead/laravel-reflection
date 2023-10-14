@props(['name', 'rows'])

<textarea {{ $attributes->merge(['class' => 'border-solid border-1 border-gray-500 rounded outline-none my-2 p-2']) }} 
    id="{{ $name }}" 
    name="{{ $name }}" 
    rows="{{ $rows }}">{{ $slot }}</textarea>

<style>
    textarea:focus {
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        border: 1px solid rgba(81, 203, 238, 1);
    }
</style>

@error($name)
    <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
@enderror