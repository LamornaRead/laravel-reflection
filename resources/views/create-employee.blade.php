<x-app>

    <div class="mt-8">
        <x-header class="text-3xl mb-4" name='Create Employee File'></x-header>
        <div class="flex justify-center mb-10">
            <x-button class="w-56 text-base" link='/home' name='Back To Dashboard'></x-button>
        </div>
     </div>
     
     <x-container-main>
        <x-company-card class=" w-6/12 mx-auto p-8">
            <form method="POST" action="create-employee">
                @csrf
                <x-input-container>
                    <x-label for='first_name' name='Employee First Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label> 
                    <x-input class="mt-2 h-10" id='first_name' name='first_name' type='text' value="{{ old('first_name') }}" required></x-input>
                    @error('first_name')
                        <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
                    @enderror
                </x-input-container>

                <x-input-container>
                    <x-label for='last_name' name='Employee Last Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label> 
                    <x-input class="mt-2 h-10" id='last_name' name='last_name' type='text' value="{{ old('last_name') }}" required></x-input>
                    @error('last_name')
                        <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
                    @enderror
                </x-input-container>

                <x-input-container>
                    <x-label for='company_id' name='Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label>
                    <x-select class="mt-2 h-10" name='company_id' id='company_id' required>
                        @foreach ($companies as $company)
                           <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </x-select> 
                </x-input-container>
                

                <x-input-container>
                    <x-label for='email' name='Employee Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label> 
                    <x-input class="mt-2 h-10" id='email' name='email' type='email' value="{{ old('email') }}" required></x-input>
                    @error('email')
                        <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
                    @enderror
                </x-input-container>

                <x-input-container>
                    <x-label for='phone_number' name='Employee Telephone <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i>'></x-label> 
                    <x-input class="mt-2 h-10" id='phone_number' name='phone_number' type='tel' value="{{ old('phone_number') }}" required></x-input>
                    @error('phone_number')
                        <p class="text-xs text-red-700 mb-0">{{ $message }}</p>
                    @enderror
                </x-input-container>

                <x-input-container>
                    <x-input-button class='text-base w-32' value='submit' type="submit"></x-input-button>
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

