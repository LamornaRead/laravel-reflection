<x-layout.app>
    <x-dashboard.layout>
        <x-slot name="top">
            <x-dropdown.box>
                <div class="ml-auto mr-auto md:ml-0 md:mr-0">
                    <x-search.form></x-search.form>
                </div>
                <x-dropdown.company>
                    <x-dropdown.item  href="/admin/all-employees">All</x-dropdown.item>
                        @foreach ($companies as $com) 
                            <x-dropdown.item  href="/admin/employees/{{ $com->name }}" class="{{ isset($currentCompany) && $currentCompany->name === $com->name ? ' bg-orange-600 text-white' : '' }}">{{ $com->name }}</x-dropdown.item>
                        @endforeach
                </x-dropdown.company>
            </x-dropdown.box>    
        </x-slot>
        


        <div>
            <h4 class="text-2xl lg:text-3xl pb-4 pt-2 lg:ml-2 mb-6 border-b border-gray-400">{{ $company->name }} Employees</h4>
        </div>
        
        @if(session()->has('success'))
            <div>
                <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
            </div>
        @endif

        @if($company->employees->count())
        <div>
            @foreach($company->employees as $em)
            <x-layout.card class="p-3 mb-4 lg:grid grid-cols-10 bg-gray-200">
                <div class="col-span-2">
                    <p class="text-base lg:m-0 col-span-1"><strong>Name :</strong> {{ $em->first_name }} {{ $em->last_name }}</p>
                </div>

                <div class="col-span-7">
                    <p class="text-base lg:ml-4 lg:mb-0 col-span-3"><strong>Company :</strong> {{ $company->name }}</p>
                </div>

                <div class="col-span-1">
                    <x-button class="uppercase text-xs px-4 py-2" link='/admin/edit/{{ $em->id }}' name='edit'></x-button>
                </div>
            </x-layout.card>
            
           @endforeach
        </div>

        @else
            <p class="text-xl sm:text-2xl text-center uppercase tracking-widest mt-20">No Employees have been added yet</p>
            <p class="text-xl sm:text-2xl text-center uppercase tracking-widest">Come Back Later</p>
        @endif

    </x-dashboard.layout>
</x-layout.app>