<x-app>

    <x-header></x-header>

    <x-container-main>
        <div class="grid grid-cols-1 gap-8  md:grid-cols-2 lg:grid-cols-3">
            
            @foreach($companies as $company)
            <x-company-card>
                <x-company-content :company="$company"></x-company-content>
            </x-company-card>
            @endforeach
    
        </div>

        <div class="page-links">
                {{ $companies->links() }}
        </div>
    </x-container-main>

    
</x-app>