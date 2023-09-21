<x-app>

    <div class="mt-8">
        <x-header class="text-3xl mb-4" name='Create Employee File'></x-header>
        <div class="flex justify-center mb-10">
            <x-button class="w-56 text-base" link='/home' name='Back To Dashboard'></x-button>
        </div>
     </div>
     
     <x-container-main>
        <x-company-card class="lg:w-6/12 mx-auto p-8">
            <form method="POST" action="create-employee">
                @csrf
                
                <x-form.field>
                    <x-form.label for='first_name'>Employee First Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='first_name'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='last_name'>Employee Last Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='last_name'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='company_id'>Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.select name='company_id'>
                        @foreach ($companies as $company)
                           <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : ''}}>{{ $company->name }}</option>
                        @endforeach
                    </x-form.select>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='email'>Employee Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='email'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='phone_number'>Employee Telephone <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='phone_number' type='tel'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.button class='text-base w-32' name='submit'></x-form.button>
                </x-form.field>


                @if(session()->has('success'))

                <x-form.field>
                    <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
                </x-form.field>

                @endif

            </form>
        </x-company-card>
     </x-container-main>

</x-app>

