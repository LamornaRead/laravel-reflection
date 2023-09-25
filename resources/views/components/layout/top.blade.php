@props(['back', 'delete'])

<div class="flex flex-col md:flex-row md:justify-between">
    <div class="p-2 ml-auto mr-auto mb-2 md:m-0">
        {{ $back }}
    </div>
    <div class="ml-auto mr-auto md:m-0">
         {{ $delete }}
    </div>
    
</div>