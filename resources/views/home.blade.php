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
        
        <div class="admin-dashboard">
            <div class="header">
                <h3>Admin Page</h3>
            </div>

            <div class="create-card">
                <div>
                    <h4 class="create-card-header">Create Company Files</h4>
                </div> 

                <div>
                    <a class="company-button create-button" href="/create-company">Create</a>
                </div>   
            </div>

            <div class="create-card">
                <div>
                    <h4 class="create-card-header">Create Employee File</h4>
                </div> 

                <div>
                    <a class="company-button create-button" href="/create-employee">Create</a>
                </div>   
            </div>

            <div class="create-card">
                <div>
                    <h4 class="create-card-header">View All Company Files</h4>
                </div> 

                <div>
                    <a class="company-button create-button" href="/admin">View</a>
                </div>   
            </div>
        </div>
        
    </x-container-main>

</x-app>

