<x-app>

    <div class="mt-8">
        <x-header class="text-3xl mb-4" name='Create Employee File'></x-header>
        <div class="flex justify-center mb-10">
            <x-button class="w-56 text-base" link='/home' name='Back To Dashboard'></x-button>
        </div>
     </div>
     
     <x-container-main>
        <x-company-card class=" w-6/12 mx-auto p-8">
            <form action="">
                <x-input-container>
                    <x-label for='first-name' name='Employee First Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label> 
                    <x-input class="mt-2 h-10" id='first-name' name='first-name' type='text'></x-input>
                </x-input-container>

                <x-input-container>
                    <x-label for='last-name' name='Employee Last Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label> 
                    <x-input class="mt-2 h-10" id='last-name' name='last-name' type='text'></x-input>
                </x-input-container>

                <x-input-container>
                    <x-label for='company-name' name='Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label>
                    <x-select class="mt-2 h-10" name='company-name' id='company-name'>
                        @foreach ($companies as $company)
                           <option value="">{{ $company->name }}</option>
                        @endforeach
                    </x-select> 
                </x-input-container>

                <x-input-container>
                    <x-label for='email' name='Employee Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label> 
                    <x-input class="mt-2 h-10" id='email' name='email' type='email'></x-input>
                </x-input-container>

                <x-input-container>
                    <x-label for='telephone' name='Employee Telephone <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label> 
                    <x-input class="mt-2 h-10" id='telephone' name='telephone' type='tel'></x-input>
                </x-input-container>

                <x-input-container>
                    <x-input-button class='text-base w-32' value='submit'></x-input-button>
                </x-input-container>

            </form>
        </x-company-card>
     </x-container-main>

</x-app>

