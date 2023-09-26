<x-layout.app>
    <x-dashboard.layout>
        <x-slot name="top">
            <x-heading.small>Create Company File</x-heading.small>
            <div class="flex justify-center">
                <x-button.normal class="mt-4" href="/home">Home</x-button.normal>
            </div>
        </x-slot>

        <x-layout.card class="lg:w-7/12 mx-auto my-10 p-3">
            @if(session()->has('success'))
                <x-form.field>
                    <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
                </x-form.field>
            @endif

            <form method="POST" action="/companies/create" enctype="multipart/form-data" onsubmit="return validateCompany()">
                @csrf
            
                <x-form.flex>
                    <x-slot name="top">
                        <x-form.field>
                            <x-form.label for='name'>Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='name'></x-form.input>
                            <x-form.js-error-two id="nameErr"></x-form.js-error-two>
                        </x-form.field>
                    </x-slot>
                    <x-slot name="bottom">
                        <x-form.field>
                            <x-form.label for='email'>Company Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='email'></x-form.input>
                            <x-form.js-error-two id="emailErr"></x-form.js-error-two>
                        </x-form.field>
                    </x-slot>
                </x-form.flex> 
                
                <x-form.flex>
                    <x-slot name="top">
                        <x-form.field>
                            <x-form.label for='website'>Company Website <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='website'></x-form.input>
                            <x-form.js-error-two id="websiteErr"></x-form.js-error-two>
                        </x-form.field>
                    </x-slot>
                    <x-slot name="bottom">
                        <x-form.field>
                            <x-form.label for='image'>Company Image 100x100 <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <div id="image-border" class="border-1 border-gray-500 rounded p-1 my-2 bg-white">
                                <x-form.file name='image'></x-form.file>
                            </div>
                            <x-form.js-error-two id="imageErr"></x-form.js-error-two>
                        </x-form.field>
                    </x-slot>
                </x-form.flex> 

                <x-form.field class="my-4">
                    <x-form.button name='submit'></x-form.button>
                </x-form.field>
            </form>
        </x-layout.card>
    </x-dashboard.layout>
</x-layout.app>