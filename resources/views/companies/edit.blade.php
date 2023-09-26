<x-layout.app>
    <x-dashboard.layout>
        <x-slot name="top">
            <x-layout.top>
                <x-slot name="back">
                    <x-button.back href="/admin/all-companies">Back</x-button.back>
                </x-slot>
                    
                <x-slot name="delete">
                    <form method="POST" action="/companies/edit/{{ $company->id  }}">
                        @csrf
                        @method('DELETE')
                        <x-form.button class="text-base py-2 px-3" name='Delete File'></x-form.button> 
                    </form>
                </x-slot>
            </x-layout.top>
        </x-slot>

        <x-layout.card class="lg:w-7/12 mx-auto my-10 p-3">
            @if(session()->has('success'))
                <x-form.field class="mx-auto w-40">
                    <p class="text-center text-white bg-green-500 w-40 py-2 px-3mx-auto rounded">{{ session('success') }}</p>
                </x-form.field>
            @endif

            <form method="POST" action="/companies/edit/{{ $company->id }}" enctype="multipart/form-data" onsubmit="return validateCompanyUpdate()">
                @csrf
                @method('PATCH')

                <x-form.flex>
                    <x-slot name="top">
                        <x-form.field>
                            <x-form.label for='name'>Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='name' value='{{ $company->name }}'></x-form.input>
                            <x-form.js-error-two id="nameErr"></x-form.js-error-two>
                        </x-form.field>
                    </x-slot>
                    <x-slot name="bottom">
                        <x-form.field>
                            <x-form.label for='email'>Company Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='email' type='email' value='{{ $company->email }}'></x-form.input>
                            <x-form.js-error-two id="emailErr"></x-form.js-error-two>
                        </x-form.field>
                    </x-slot>
                </x-form.flex> 
                
                <x-form.field>
                    <x-form.label for='website'>Company Website <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='website' value='{{ $company->website }}'></x-form.input>
                    <x-form.js-error-two id="websiteErr"></x-form.js-error-two>
                </x-form.field>

                <x-form.field class="col-span-2 w-full my-auto">
                    <x-form.label for='image'>Company Image 100x100 <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <div class="sm:grid grid-cols-3 border-1 border-gray-500 rounded p-2 my-2 bg-white">
                        <div class="col-span-2 w-full my-auto">
                            <x-form.file name='image'></x-form.file>
                        </div>
                        <img class="rounded-lg w-20 mx-auto" src="{{ asset('storage/' . $company->image) }}" alt="company logo">
                    </div>
                    <x-form.js-error-two id="imageErr"></x-form.js-error-two>
                </x-form.field>

                <x-form.field class="my-4">
                    <x-form.button name='Update'></x-form.button>
                </x-form.field>
            </form>
        </x-layout.card>
    </x-dashboard.layout>
</x-layout.app>