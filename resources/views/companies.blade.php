<x-app>

    <x-header name='Company Management Services'></x-header>

    <x-container-main>
        
    @if($companies->count())
        <div class="grid grid-cols-1 gap-8  md:grid-cols-2 lg:grid-cols-3">
            @foreach($companies as $company)
            <x-company-card class="flex flex-col">
                <x-company-content :company="$company"></x-company-content>
            </x-company-card>
            @endforeach
    
        </div>

        <div class="pt-24">
                {{ $companies->links() }}
        </div>
    @else
    <p class="text-xl sm:text-2xl text-center uppercase tracking-widest mt-24 sm:mt-56">No companies have been added yet</p>
    <p class="text-xl sm:text-2xl text-center uppercase tracking-widest">Come Back Later</p>
    @endif

    </x-container-main>

    
</x-app>