<x-app>

    <x-container-main>

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

            <x-company-card class="w-9/12 mx-auto p-4 flex justify-between mb-8">
                <div>
                    <h4 class="m-0">Create Company Files</h4>
                </div> 

                <x-button class="px-4" name='create' link='/create-company'></x-button>
            </x-company-card>

            <x-company-card class="w-9/12 mx-auto p-4 flex justify-between mb-8">
                <div>
                    <h4 class="m-0">Create Employee File</h4>
                </div> 

                <x-button class="px-4" name='create' link='/create-employee'></x-button>
            </x-company-card>

            <x-company-card class="w-9/12 mx-auto p-4 flex justify-between mb-8">
                <div>
                    <h4 class="m-0">View All Company Files</h4>
                </div> 
                
                <x-button class="px-4" name='View' link='/admin'></x-button>
            </x-company-card>

        </div>
        
    </x-container-main>

</x-app>

