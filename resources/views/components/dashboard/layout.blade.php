@props(['top'])
<div>
    <div class="md:grid grid-cols-8">
        <div class="col-span-1 bg-gray-900 p-4 hidden md:block">
            <ul class="liststyle-none p-0">
                <x-dashboard.item href="/home" :active="request()->routeIs('home')">All Info</x-dashboard.item>
                <x-dashboard.item href="/admin/all-companies" :active="request()->routeIs('all-companies')">All Companies</x-dashboard.item>
                <x-dashboard.item href="/admin/all-employees" :active="request()->routeIs('all-employees')">All Employees</x-dashboard.item>
                <x-dashboard.item href="/companies/create" :active="request()->routeIs('create-company')">Add Company</x-dashboard.item>
                <x-dashboard.item href="/employee/create" :active="request()->routeIs('create-employee')">Add Employee</x-dashboard.item>
            </ul>
        </div>
        
        <div {{ $attributes->merge(['class' => 'col-span-7']) }}>
            <x-heading.large>Admin Page</x-heading.large>
            <div class="bg-gray-800 p-6">
                {{ $top }}
            </div>
            <div class="p-8 md:min-h-screen">
                {{ $slot }}
            </div>
        </div>
        
    </div>
</div>