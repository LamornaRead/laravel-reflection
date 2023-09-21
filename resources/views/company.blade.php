<x-app>
    <x-container-main class="mb-10">

        <div class="mt-10">
            <x-header class="mb-6" name='{{ $company->name }}'></x-header>
            <div class="flex justify-center mb-10">
                <x-button class="w-56 text-base" link='/home' name='Back To Dashboard'></x-button>
            </div>
        </div>

        <x-company-card class="lg:w-9/12 mx-auto p-4 mb-6">
            <div class="md:flex">
                <div class="md:mr-4">
                    <img class="rounded-lg w-40" src="{{ asset('storage/' . $company->image) }}" alt="company logo">
                </div>
                <div class="mt-2 md:mt-0">
                    <p><strong>Company Name :</strong> {{ $company->name }}</p>
                    <p><strong>Company Email :</strong> {{ $company->email }}</p>
                    <p><strong>Company Website :</strong> {{ $company->website }}</p>
                    <div>
                        <x-button class="uppercase text-sm px-4" link='/edit-company/{{ $company->id }}' name='edit'></x-button>
                        <x-button class="uppercase text-sm px-3" link='#' name='delete'></x-button>
                    </div>
                </div>
            </div>
        </x-company-card>
        @foreach($company->employees as $em)
        @if($employees->count()) 
            <x-company-card class="lg:w-9/12 mx-auto p-4">
            <h4 class="text-3xl pb-6">Employees</h4>

            
                <div class="lg:grid lg:grid-cols-6 bg-gray-300 p-3 rounded border border-gray-400 mb-6">
                    <div class="col-span-3 xl:col-span-4">
                        <p><strong>First Name :</strong> {{ $em->first_name }}</p>
                        <p><strong>Last Name :</strong> {{ $em->last_name }}</p>
                        <p><strong>Email :</strong> {{ $em->email }}</p>
                        <p class="lg:mb-0"><strong>Telephone :</strong> {{ $em->phone_number }}</p>
                    </div>
                    <div class="col-span-3 xl:col-span-2 my-auto">
                        <x-button class="uppercase text-sm px-4 lg:mr-3" link='#' name='edit'></x-button>
                        <x-button class="uppercase text-sm px-3" link='#' name='delete'></x-button>
                    </div>
                </div>
        </x-company-card>
        
       @endif
       @endforeach
      



    </x-container-main>

</x-app>
