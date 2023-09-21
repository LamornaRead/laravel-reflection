<x-app>

    <div class="mt-8">
        <x-header class="text-3xl mb-4" name='{{ $employee->first_name }} {{ $employee->last_name}}'></x-header>
        <x-header class="text-xl mb-4" name='Company : {{ $employee->company->name }}'></x-header>
        <div class="flex justify-center mb-10">
            <x-button class="w-56 text-base" link='/company/{{ $employee->company->name }}' name='Back To File'></x-button>
        </div>
     </div>
     
     <x-container-main>
        <x-company-card class="lg:w-6/12 mx-auto p-8">
            <form method="POST" action="/edit-employee/{{ $employee->id }}">
                @csrf
                @method('PATCH')
                
                <x-form.field>
                    <x-form.label for='first_name'>Employee First Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='first_name' value='{{ $employee->first_name }}'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='last_name'>Employee Last Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='last_name' value='{{ $employee->last_name }}'></x-form.input>
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
                    <x-form.input name='email' value='{{ $employee->email }}'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='phone_number'>Employee Telephone <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='phone_number' type='tel' value='{{ $employee->phone_number }}'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.button class='text-base w-32' name='Update'></x-form.button>
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