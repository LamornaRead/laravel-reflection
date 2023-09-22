<x-app>
    <x-dashboard>
        <div>
            <x-company-card class="lg:w-6/12 mx-auto p-6">
                <x-header class="text-3xl mb-4" name='Create Employee File'></x-header>
                <div class="flex justify-center mb-4">
                    <x-button class="uppercase py-2 px-4" link="/home" name='home'></x-button>
                </div>
                    @if(session()->has('success'))
        
                        <x-form.field>
                            <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
                        </x-form.field>

                    @endif
                <form method="POST" action="/employee/create">
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
                        <x-form.button class='text-base w-32 py-2' name='submit'></x-form.button>
                    </x-form.field>
    
                </form>
            </x-company-card>
        </div>
    </x-dashboard>
</x-app>