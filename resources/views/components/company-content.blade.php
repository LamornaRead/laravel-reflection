@props(['company'])

<div class="flex flex-col">
    <div class="text-center py-3 border-b border-gray-400 h-16">
        <h3 class="text-base">{{ $company->name }}</h3>
    </div>
    <div class="flex justify-items-center mx-auto py-8">
        <img class="rounded-lg w-24" src="{{ asset('storage/' . $company->image) }}" alt="company logo">
    </div>
    <x-button  name='View More' link='/company/{{ $company->name }}' class="w-24 my-3 mx-auto"></x-button>
</div>
