@props(['company'])

<div class="flex flex-col">
    <div class="text-center py-3 border-b border-gray-400 h-12">
        <h3 class="text-xs sm:text-base md:text-sm">{{ $company->name }}</h3>
    </div>
    <div class="flex justify-items-center mx-auto py-4">
        <img class="rounded-lg w-32" src="{{ asset('storage/' . $company->image) }}" alt="company logo">
    </div>
    <x-button.normal class="my-3 mx-auto" href="/company/{{ $company->name }}">View More</x-button.normal>
</div>