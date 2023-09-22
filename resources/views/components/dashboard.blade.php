


<div>
    <div class="md:grid grid-cols-8">
        <div class="col-span-1 bg-gray-900 p-4 hidden md:block">
            <ul class="liststyle-none p-0">
                <li class="md:mb-3"><a class="text-xs lg:text-sm no-underline uppercase text-orange-600" href="/home">All Info</a></li>
                <li class="md:mb-3"><a class="text-xs lg:text-sm no-underline uppercase text-orange-600" href="/admin/all-companies">All Companies</a></li>
                <li class="md:mb-3"><a class="text-xs lg:text-sm no-underline uppercase text-orange-600" href="/admin/all-employees">All Employees</a></li>
                <li class="md:mb-3"><a class="text-xs lg:text-sm no-underline uppercase text-orange-600" href="">Add Company</a></li>
                <li class="md:mb-3"><a class="text-xs lg:text-sm no-underline uppercase text-orange-600" href="/employee/create">Add Employee</a></li>
                {{-- <li><a href=""></a></li>
                <li><a href=""></a></li> --}}
            </ul>
        </div>
        
        <div {{ $attributes->merge(['class' => 'col-span-7']) }}>
            <x-header class="bg-orange-600 my-0 py-4 md:py-12 border-b border-gray-900" name='Admin Page'></x-header>
            <div class="p-8">
                {{ $slot }}
            </div>
        </div>
        

    </div>

</div>


<x-bottom></x-bottom>