@props(['top', 'bottom'])

<div class="md:flex md:gap-6">
    <div class="md:w-1/2">
        {{ $top }}
    </div>
    <div class="md:w-1/2">
        {{ $bottom }}
    </div>
</div>