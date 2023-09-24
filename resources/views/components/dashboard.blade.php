


<div>
    <div class="md:grid grid-cols-8">
        <div class="col-span-1 bg-gray-900 p-4 hidden md:block">
            <ul class="liststyle-none p-0">
                <x-dash-item href="/home" :active="request()->routeIs('home')">All Info</x-dash-item>
                <x-dash-item href="/admin/all-companies" :active="request()->routeIs('all-companies')">All Companies</x-dash-item>
                <x-dash-item href="/admin/all-employees" :active="request()->routeIs('all-employees')">All Employees</x-dash-item>
                <x-dash-item href="/companies/create" :active="request()->routeIs('create-company')">Add Company</x-dash-item>
                <x-dash-item href="/employee/create" :active="request()->routeIs('create-employee')">Add Employee</x-dash-item>
            </ul>
        </div>
        
        <div {{ $attributes->merge(['class' => 'col-span-7']) }}>
            <x-header class="bg-orange-600 my-0 py-4 md:py-12 border-b border-gray-900" name='Admin Page'></x-header>
            <div class="p-8 md:min-h-screen">
                {{ $slot }}
            </div>
        </div>
        
    </div>
</div>
