<x-layout.app>
    <x-dashboard.layout>
        <x-slot name="top"></x-slot>
        <div class="min-h-screen">

            <x-layout.card class="w-full mx-auto p-4 mb-6">
                <div class="md:flex">
                    <div class="md:mr-4 flex justify-center">
                        <img class="rounded-lg w-40" src="{{ asset('storage/' . $company->image) }}" alt="company logo">
                    </div>
                    <div class="mt-2 md:mt-0">
                        <p><strong>Company Name :</strong> {{ $company->name }}</p>
                        <p><strong>Company Email :</strong> {{ $company->email }}</p>
                        <p><strong>Company Website :</strong> {{ $company->website }}</p>
                    </div>
                </div>
            </x-layout.card>

            @if($company->employees->count())

            <div class="my-10 flex justify-center md:block">
                <x-button.normal class="w-56" href="/home">Back To Dashboard</x-button.normal>
            </div>
        
            <x-layout.card class="p-3">
                <div>
                    <h4 class="text-3xl pb-4 pt-2 lg:ml-2 mb-6 border-b border-gray-400">Employees <i class="fa-solid fa-user-group"></i></h4>
                </div>

                @foreach($company->employees as $em)
                    <x-layout.card class="mb-6 bg-gray-300 p-3">

                        <div class="lg:grid grid-cols-4">
                            <p class="m-0"><strong>First Name :</strong> {{ $em->first_name }}</p>
                            <p class="m-0"><strong>Last Name :</strong> {{ $em->last_name }}</p>
                            <p class="m-0"><strong>Email :</strong> {{ $em->email }}</p>
                            <p class="m-0"><strong>Telephone :</strong> {{ $em->phone_number }}</p>
                        </div>

                    </x-layout.card>
                @endforeach
            
            
            </x-layout.card>
    
            @else
            <p class="text-xl uppercase tracking-widest my-10">No Employees have been added yet</p>
            @endif
            <div class="my-10 flex justify-center md:block">
                <x-button.normal class="w-56" href="/home">Back To Dashboard</x-button.normal>
            </div>

        </div>

    </x-dashboard.layout>
</x-layout.app>
