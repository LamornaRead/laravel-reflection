<x-layout.app>
    <x-dashboard>
        <x-slot name="top">
            <x-heading.small>Create Company File</x-heading.small>
            <div class="flex justify-center">
                <x-button class="mt-4" link="/home" name='home'></x-button>
            </div>
        </x-slot>
        <div class="lg:mb-16">
            <x-layout.card class="lg:w-6/12 mx-auto p-8">

                @if(session()->has('success'))

                <x-form.field>
                    <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
                </x-form.field>

                @endif

                <form method="POST" action="/companies/create" enctype="multipart/form-data" onsubmit="return validateCompany()">
                    @csrf
                
                <x-form.field>
                    <x-form.label for='name'>Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='name'></x-form.input>
                    <x-form.js-error-two id="nameErr"></x-form.js-error-two>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='email'>Company Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='email'></x-form.input>
                    <x-form.js-error-two id="emailErr"></x-form.js-error-two>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='image'>Company Image 100x100 <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input class="mt-2 h-10 border-none" name='image' type='file'></x-form.input>
                    <x-form.js-error-two id="imageErr"></x-form.js-error-two>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='website'>Company Website <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='website'></x-form.input>
                    <x-form.js-error-two id="websiteErr"></x-form.js-error-two>
                </x-form.field>

                <x-form.field>
                    <x-form.button name='submit'></x-form.button>
                </x-form.field>

            </form>
        </x-layout.card>
        </div>
    </x-dashboard>
</x-layout.app>