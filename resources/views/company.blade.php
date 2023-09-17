<x-app>
    
    <x-container-main class="mt-10">
            <x-button class="text-lg rounded-xl px-4" link='/' name='<i class="fa-solid fa-arrow-left"></i> Go back'></x-button>

            <x-company-card class="max-w-2xl mx-auto p-4 sm:flex w-full mb-8 mt-16">
                <div class="flex justify-items-center sm:mr-8">
                    <img class="max-w-sm min-w-0 w-full rounded-xl" src="{{ $company->image }}" alt="random image">
                </div>
                
                <div>
                    <h2 class="mb-10 mt-8 sm:mt-0">{{ $company->name }}</h2>
                    <p><strong>Email :</strong> {{ $company->email }}</p>
                    <p><strong>Website :</strong> {{ $company->website }}</p>
                </div>
            </x-company-card>

            <x-company-card class="max-w-2xl mx-auto p-4  w-full mb-8">
                <h2 class="border-b border-gray-400 pb-4">Employees <i class="fa-solid fa-user-group"></i></h2>
                <ul class="list-none pl-0">
                    @foreach($company->employees as $em)
                    <li class="text-lg my-8 bg-gray-500 p-3 rounded-lg">{{ $em->first_name }} {{ $em->last_name}}</li>
                    @endforeach
                </ul>
            </x-company-card>

    </x-container-main>


</x-app>
