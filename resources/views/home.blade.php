<x-app>

    <x-container-main class="py-8">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>



        <div class="border-t border-gray-400 mt-10">
            <x-header class="mt-8" name='Admin Page'></x-header>
        @if($companies->count())

        <div class="grid grid-cols-1 gap-6  md:grid-cols-2 xl:grid-cols-4">
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

        </div>
        
    </x-container-main>

</x-app>

