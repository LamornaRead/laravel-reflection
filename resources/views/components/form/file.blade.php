@props(['name'])

<input {{ $attributes->merge(['class' => 'h-8 pl-2 my-2 h-10']) }} 
  id="{{ $name }}"
  name="{{ $name }}"
  type="file" 
  value="{{ old($name) }}"
  >
<style>
    input:focus {
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        border: 1px solid rgba(81, 203, 238, 1);
    }
</style>
@error('name')
    <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
 @enderror