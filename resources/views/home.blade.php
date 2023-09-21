<x-app>

    <x-container-main class="py-8">

        {{-- <div class="row justify-content-center">
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
        </div> --}}
        <x-header class="mt-8" name='Admin Page'></x-header>
        <div class="md:grid grid-cols-10 mt-10 md:border md:border-gray-400 md:shadow-sm md:rounded">
            <div class="col-span-2 bg-gray-900 p-4 rounded hidden md:block">
                <ul class="liststyle-none p-0">
                    <li class="md:mb-3"><a class="text-xs md:text-sm no-underline uppercase text-orange-600" href="">All Info</a></li>
                    <li class="md:mb-3"><a class="text-xs md:text-sm no-underline uppercase text-orange-600" href="">All Companies</a></li>
                    <li class="md:mb-3"><a class="text-xs md:text-sm no-underline uppercase text-orange-600" href="">All Employees</a></li>
                    <li class="md:mb-3"><a class="text-xs md:text-sm no-underline uppercase text-orange-600" href="">Add Company</a></li>
                    <li class="md:mb-3"><a class="text-xs md:text-sm no-underline uppercase text-orange-600" href="">Add Employee</a></li>
                    {{-- <li><a href=""></a></li>
                    <li><a href=""></a></li> --}}
                </ul>
            </div>
            
            <div class="col-span-8 p-3">
                @if($companies->count())
        
                <div class="grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-3">
                @foreach($companies as $company)
                    <x-company-card class="md:ml-3">
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
        
            </div>

        </div>
   
    </x-container-main>

</x-app>

