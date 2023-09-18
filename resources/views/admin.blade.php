<x-app>

    <div>
        <h1 class="form-header">File Management</h1>
        <div class="dash-btn-con">
            <a class="dashboard-btn" href="/home">Back To Dashboard</a>
        </div>
    </div>

    <x-container-main>
        @foreach ($companies as $company)
            <div class="company-list">
                <p class="list-name">{{ $company->name }}</p>
                <a class="list-link" href="edit-files/{{ $company->name }}">Edit</a>
            </div>
        @endforeach  
        <div class="pt-16">
            {{ $companies->links() }}
        </div>
    </x-container-main>


</x-app>



