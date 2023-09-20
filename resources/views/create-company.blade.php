<x-app>
    
    <div>
    <x-header class="text-3xl mb-4" name='Create Company File'></x-header>
        <div class="flex justify-center mb-10">
            <x-button class="w-56 text-base" link='/home' name='Back To Dashboard'></x-button>
        </div>
     </div>
     
     <x-container-main>
        <x-company-card class="w-6/12 mx-auto p-8">
                <form method="POST" action="/create-company" enctype="multipart/form-data">
                    @csrf
                
                <x-input-container>
                    <x-label for='name' name='Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label> 
                    <x-input class="mt-2 h-10" id='name' name='name' type='text' value="{{ old('name') }}" required></x-input>
                    @error('name')
                        <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
                    @enderror
                </x-input-container>

                <x-input-container>
                    <x-label for='email' name='Company Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label>
                    <x-input class="mt-2 h-10" id='email' name='email' type='email' value="{{ old('email') }}" required></x-input>
                    @error('email')
                        <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
                    @enderror
                </x-input-container>

                <x-input-container>
                    <x-label for='image' name='Company Image 100x100 <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label>
                    <x-input class="mt-2 h-10 border-none" id='image' name='image' type='file' required></x-input>
                    @error('image')
                        <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
                    @enderror
                </x-input-container>

                <x-input-container>
                    <x-label for='website' name='Company Website <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label>
                    <x-input class="mt-2 h-10" id='website' name='website' type='text' value="{{ old('website') }}" required></x-input>
                    @error('website')
                        <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
                    @enderror
                </x-input-container>


                <x-input-container>
                    <x-input-button class='text-base w-32' type="submit" value='submit'></x-input-button>
                </x-input-container>

                @if(session()->has('success'))

                <x-input-container>
                    <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
                </x-input-container>

                @endif

            </form>
        </x-company-card>
     </x-container-main>
   
</x-app>

