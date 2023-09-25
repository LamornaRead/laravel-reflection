@props(['trigger'])
<div x-data="{ show: false}" class="my-6 md:my-0 w-56 ml-auto mr-auto md:ml-0 md:mr-0">
    <div  @click="show = ! show" @click.away="show = false">
        {{ $trigger }}
    </div>

    <div x-show="show" class="absolute bg-white z-50 border r-0 l-auto rounded h-64 overflow-scroll w-56 mt-2" style="display: none">
        {{ $slot }}
    </div>
</div>