<x-app>
    
    <div>
    <x-header class="text-3xl mb-4" name='Create Company File'></x-header>
        <div class="flex justify-center mb-10">
            <x-button class="w-56 text-base" link='/home' name='Back To Dashboard'></x-button>
        </div>
     </div>
     
     <x-container-main>
        <x-company-card class="w-6/12 mx-auto p-8">
                <form action="">
                
                <x-input-container>
                    <x-label for='name' name='Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label> 
                    <x-input class="mt-2 h-10" id='name' name='name' type='text'></x-input>
                </x-input-container>

                <x-input-container>
                    <x-label for='email' name='Company Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label>
                    <x-input class="mt-2 h-10" id='email' name='email' type='email'></x-input>
                </x-input-container>

                <x-input-container>
                    <x-label for='image' name='Company Image 100x100 <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label>
                    <x-input class="mt-2 h-10 border-none" id='image' name='image' type='file'></x-input>
                </x-input-container>

                <x-input-container>
                    <x-label for='website' name='Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label>
                    <x-input class="mt-2 h-10" id='website' name='website' type='text'></x-input>
                </x-input-container>

                <x-input-container>
                    <x-label for='website' name='Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label>
                    <x-input class="mt-2 h-10" id='website' name='website' type='text'></x-input>
                </x-input-container>

                <x-input-container>
                    <x-input-button class='text-base w-32' value='submit'></x-input-button>
                </x-input-container>

            </form>
        </x-company-card>
     </x-container-main>
   
</x-app>

