@props(['trigger'])

<div x-data="{ show: false}">
    {{-- trigger --}}
    <div  @click="show = ! show" @click.away="show = false">
        {{ $trigger }}
    </div>
    
    
    {{-- links --}}
    <div x-show="show" class="absolute bg-white z-50 w-32 border r-0 l-auto rounded shadow" style="display: none">
     {{ $slot }}
    </div>
</div>