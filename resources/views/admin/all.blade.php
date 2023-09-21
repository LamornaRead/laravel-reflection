<x-app>
    <x-dashboard>
        @if($companies->count())
        
        <div>
        @foreach($companies as $company)
            <x-company-card class="p-3 mb-4 flex justify-between bg-gray-200">
                <h4 class="text-base mb-0">{{ $company->name }}</h4>
                <div>
                    <x-button class="uppercase text-xs px-4" link='/edit-company/{{ $company->id }}' name='edit'></x-button>
                    <x-button class="uppercase text-xs px-3" link='/edit-company/{{ $company->id }}' name='delete'></x-button>
                </div>
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
</x-app>