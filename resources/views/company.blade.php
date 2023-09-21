<x-app>
    <x-dashboard>
        <div class="min-h-screen">

            <div class="mb-10">
                <x-button class="w-56 text-base" link='/home' name='Back To Dashboard'></x-button>
            </div>

            <x-company-card class="w-full mx-auto p-4 mb-6">
                <div class="md:flex">
                    <div class="md:mr-4">
                        <img class="rounded-lg w-40" src="{{ asset('storage/' . $company->image) }}" alt="company logo">
                    </div>
                    <div class="mt-2 md:mt-0">
                        <p><strong>Company Name :</strong> {{ $company->name }}</p>
                        <p><strong>Company Email :</strong> {{ $company->email }}</p>
                        <p><strong>Company Website :</strong> {{ $company->website }}</p>
                    </div>
                </div>
            </x-company-card>

            @if($company->employees->count())

        
            <x-company-card class="p-3">
                <div>
                    <h4 class="text-center text-3xl pb-4 m-0">Employees</h4>
                </div>

                @foreach($company->employees as $em)
                    <div class="bg-gray-300 p-3 rounded border border-gray-400 mb-6">
                        <div>
                            <p><strong>First Name :</strong> {{ $em->first_name }}</p>
                            <p><strong>Last Name :</strong> {{ $em->last_name }}</p>
                            <p><strong>Email :</strong> {{ $em->email }}</p>
                            <p class="lg:mb-0"><strong>Telephone :</strong> {{ $em->phone_number }}</p>
                        </div>
                    </div>
                @endforeach
            
            
            </x-company-card>
    
            @else
            <p class="text-xl  text-center uppercase tracking-widest mt-24">No Employees have been added yet</p>
            @endif

        </div>

    </x-dashboard>
</x-app>
