<x-app>
    <x-dashboard>
        <div>
            <h4 class="text-2xl lg:text-3xl pb-4 pt-2 lg:ml-2 mb-6 border-b border-gray-400">All Employees</h4>
        </div>
        
        @if(session()->has('success'))
            <div>
                <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
            </div>
        @endif
        @if($employees->count())
            <div>
                @foreach($employees as $employee)
                    <x-company-card class="p-3 mb-4 lg:grid grid-cols-9 bg-gray-200">
                        <div class="col-span-2">
                            <p class="text-base lg:m-0 col-span-1"><strong>Name :</strong> {{ $employee->first_name }} {{ $employee->last_name }}</p>
                        </div>

                        <div class="col-span-6">
                            <p class="text-base lg:ml-4 lg:mb-0 col-span-3"><strong>Company :</strong> {{ $employee->company->name }}</p>
                        </div>

                        <div class="col-span-1">
                            <x-button class="uppercase text-xs px-4 py-2" link='/employee/edit/{{ $employee->id }}' name='edit'></x-button>
                            {{-- <x-button class="uppercase text-xs px-3" link='' name='delete'></x-button> --}}

                        </div>
                    </x-company-card>
                    
                @endforeach
            </div>

            <div class="pt-8">
                {{ $employees->links() }}
            </div>
        @else
            <p class="text-xl sm:text-2xl text-center uppercase tracking-widest mt-24 sm:mt-56">No companies have been added yet</p>
            <p class="text-xl sm:text-2xl text-center uppercase tracking-widest">Come Back Later</p>
        @endif
    </x-dashboard>

</x-app>