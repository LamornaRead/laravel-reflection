@props(['name', 'type' => 'text'])

<input {{ $attributes->merge(['class' => 'border-solid border-1 border-gray-500 rounded outline-none h-8 pl-2 my-2 h-10']) }} class="input-field"id="{{ $name }}"
  name="{{ $name }}"
  type="{{ $type }}" 
  value="{{ old($name) }}"
  required
  >
<style>
    .input-field:focus {
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        border: 1px solid rgba(81, 203, 238, 1);
    }
</style>
@error('name')
    <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
 @enderror