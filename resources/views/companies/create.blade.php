<x-app>
    <x-dashboard>
        <div class="lg:mb-16">
            <x-company-card class="lg:w-6/12 mx-auto p-8">
                <x-header class="text-3xl mb-8" name='Create Company File'></x-header>
                <div class="flex justify-center mb-4">
                    <x-button class="uppercase py-2 px-4" link="/home" name='home'></x-button>
                </div>
                @if(session()->has('success'))

                <x-form.field>
                    <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
                </x-form.field>

                @endif
                <form method="POST" action="/companies/create" enctype="multipart/form-data">
                    @csrf
                
                <x-form.field>
                    <x-form.label for='name'>Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='name'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='email'>Company Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='email' type='email'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='image'>Company Image 100x100 <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input class="mt-2 h-10 border-none" name='image' type='file'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='website'>Company Website <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='website'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.button class='text-base w-32 py-2' name='submit'></x-form.button>
                </x-form.field>

            </form>
        </x-company-card>
        </div>
    </x-dashboard>
</x-app>