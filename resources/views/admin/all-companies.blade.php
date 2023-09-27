<x-layout.app>
    <x-dashboard.layout>
        <x-slot name="top">
            <div class="flex w-64 ml-auto mr-auto md:ml-0 md:mr-0 md:block">
                <x-search.form></x-search.form>
            </div>
        </x-slot>

        <div>
            <h4 class="text-2xl lg:text-3xl pb-4 pt-2 lg:ml-2 mb-6 border-b border-gray-400">All Companies</h4>
        </div>

        @if(session()->has('success'))
            <div>
                <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
            </div>
        @endif

        @if($companies->count())
            @foreach($companies as $company)
                <x-layout.card class="p-3 mb-4 lg:flex justify-between bg-gray-200">
                    <div class="flex">
                        <p class="text-base lg:m-0">{{ $company->name }}</p>
                    </div>

                    <div>
                        <x-button.normal class="mt-4 px-4 py-2" href="/companies/edit/{{ $company->id }}">Edit</x-button.normal>
                    </div>
                </x-layout.card>
            @endforeach

            <div class="pt-8">
                {{ $companies->links() }}
            </div>
        @else
            <p class="text-xl sm:text-2xl text-center uppercase tracking-widest mt-20">No companies have been added yet</p>
            <p class="text-xl sm:text-2xl text-center uppercase tracking-widest">Come Back Later</p>
        @endif
    </x-dashboard.layout>
</x-layout.app>