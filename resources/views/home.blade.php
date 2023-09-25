<x-layout.app>
    <x-dashboard.layout>
        <x-slot name="top">
            <div class="w-64 mx-auto">
                <x-search.form></x-search.form>
             </div>
        </x-slot>

        @if($companies->count())
    
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 xl:grid-cols-5">
        @foreach($companies as $company)
            <x-layout.card>
                <x-content.company :company="$company"></x-content.company>
            </x-layout.card>
            

        @endforeach
    
        </div>

        <div class="pt-8">
                {{ $companies->links() }}
        </div>
        @else
        <p class="text-xl sm:text-2xl text-center uppercase tracking-widest mt-24 sm:mt-56">No companies have been added yet</p>
        <p class="text-xl sm:text-2xl text-center uppercase tracking-widest">Come Back Later</p>
        @endif
    </x-dashboard.layout>
</x-layout.app>

