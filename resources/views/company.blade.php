<x-layout.app>
    <x-dashboard.layout>
        <x-slot name="top"></x-slot>

        <div class="min-h-screen">
            <x-layout.card class="w-full mx-auto p-4 mb-6 bg-gray-800">
                <div class="md:flex">
                    <div class="md:mr-4 flex justify-center">
                        <img class="rounded-lg w-40 border" src="{{ asset('storage/' . $company->image) }}" alt="company logo">
                    </div>
                    <div class="mt-2 md:mt-0 text-white">
                        <x-content.para-two><x-slot name='name'>Company Name :</x-slot>{{ $company->name }}</x-content.para-two>
                        <x-content.para-two><x-slot name='name'>Company Email :</x-slot>{{ $company->email }}</x-content.para-two>
                        <x-content.para-two><x-slot name='name'>Company Website :</x-slot>{{ $company->website }}</x-content.para-two>
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
                                <x-content.para-two class="m-0"><x-slot name='name'>First Name :</x-slot>{{ $em->first_name }}</x-content.para-two>
                                <x-content.para-two class="m-0"><x-slot name='name'>Last Name :</x-slot>{{ $em->last_name }}</x-content.para-two>
                                <x-content.para-two class="m-0"><x-slot name='name'>Email :</x-slot>{{ $em->email }}</x-content.para-two>
                                <x-content.para-two class="m-0"><x-slot name='name'>Telephone :</x-slot>{{ $em->phone_number }}</x-content.para-two>
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
