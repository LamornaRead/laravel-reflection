<x-layout.app>
    <x-dashboard>
        <x-slot name="top">
            <div class="w-64 mx-auto">
                <x-search.form></x-search.form>
             </div>
        </x-slot>

        @if($companies->count())
    
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 xl:grid-cols-5">
        @foreach($companies as $company)
            <x-company-card>
                <x-company-content :company="$company"></x-company-content>
            </x-company-card>
            

        @endforeach
    
        </div>

        <div class="pt-8">
                {{ $companies->links() }}
        </div>
        @else
        <p class="text-xl sm:text-2xl text-center uppercase tracking-widest mt-24 sm:mt-56">No companies have been added yet</p>
        <p class="text-xl sm:text-2xl text-center uppercase tracking-widest">Come Back Later</p>
        @endif
    </x-dashboard>
</x-layout.app>

