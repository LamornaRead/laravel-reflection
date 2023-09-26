<x-layout.app>
    <x-dashboard.layout>
        <x-slot name="top">
            <x-dropdown.box>
                <div class="ml-auto mr-auto md:ml-0 md:mr-0">
                    <x-search.form></x-search.form>
                </div>
                <x-dropdown.company>
                    <x-slot name="trigger">
                        <button class="px-6 h-10 h-12 my-1 text-base bg-orange-700 hover:bg-orange-600 rounded text-white w-full">
                            {{ isset($currentCompany) ? $currentCompany->name : 'Company' }}
                        </button>
                    </x-slot>
                    @foreach ($companies as $com) 
                        <x-dropdown.item  href="/admin/employees/{{ $com->name }}">{{ $com->name }}</x-dropdown.item>
                    @endforeach
                </x-dropdown.company>
            </x-dropdown.box>
        </x-slot>
        
        <div>
            <h4 class="text-2xl lg:text-3xl pb-4 pt-2 lg:ml-2 mb-6 border-b border-gray-400">All Employees</h4>
        </div>
        
        @if(session()->has('success'))
            <div>
                <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
            </div>
        @endif

        @if($employees->count())
            @foreach($employees as $employee)
                <x-layout.card class="p-3 mb-4 lg:grid grid-cols-10 bg-gray-200">
                    <div class="col-span-2">
                        <p class="text-base lg:m-0 col-span-1"><strong>Name :</strong> {{ $employee->first_name }} {{ $employee->last_name }}</p>
                    </div>

                    <div class="col-span-7">
                        <p class="text-base lg:ml-4 lg:mb-0 col-span-3"><strong>Company :</strong> {{ $employee->company->name }}</p>
                    </div>

                    <div class="col-span-1">
                        <x-button.normal class="mt-4 px-4 py-2" href="/employee/edit/{{ $employee->id }}">Edit</x-button.normal>
                    </div>
                </x-layout.card>
            @endforeach

            <div class="pt-8">
                {{ $employees->links() }}
            </div>
        @else
            <p class="text-xl sm:text-2xl text-center uppercase tracking-widest mt-20">No Employees have been added yet</p>
            <p class="text-xl sm:text-2xl text-center uppercase tracking-widest">Come Back Later</p>
        @endif
    </x-dashboard.layout>
</x-layout.app>