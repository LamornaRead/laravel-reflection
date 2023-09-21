@props(['company'])

<div class="text-center py-3 border-b border-gray-400">
    <h3 class="text-base m-0">{{ $company->name }}</h3>
</div>
<div class="flex justify-items-center mx-auto py-8">
    <img class="rounded-lg w-40" src="{{ asset('storage/' . $company->image) }}" alt="company logo">
</div>
<x-button  name='View More' link='/company/{{ $company->name }}' class="w-24 my-3 mx-auto">
    
</x-button>
