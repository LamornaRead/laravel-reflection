<x-layout.app>
    <x-dashboard.layout>
        <x-slot name="top">
            <x-layout.top>
                <x-slot name="back">
                    <x-back-button href="/admin/all-employees">Back</x-back-button>
                </x-slot>
                    
                <x-slot name="delete">
                    <form method="POST" action="/employee/edit/{{ $employee->id }}">
                        @csrf
                        @method('DELETE')
                        <x-form.button class="text-base py-2 px-3" name='Delete File'></x-form.button> 
                    </form>
                </x-slot>
            </x-layout.top>
        </x-slot>




                <x-layout.card class="p-4 md:w-6/12 mx-auto">
                    @if(session()->has('success'))
                
                    <x-form.field class="mx-auto w-40">
                        <p class="text-center text-white bg-green-500 w-40 py-2 px-3mx-auto rounded">{{ session('success') }}</p>
                    </x-form.field>

                    @endif
                    
                    <form method="POST" action="/employee/edit/{{ $employee->id }}" onsubmit="return validateEmployee()">
                        @csrf
                        @method('PATCH')
                        
                        <x-form.field>
                            <x-form.label for='first_name'>Employee First Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='first_name' value='{{ $employee->first_name }}'></x-form.input>
                            <x-form.js-error-two id="firstnameErr"></x-form.js-error-two>
                        </x-form.field>
    
                        <x-form.field>
                            <x-form.label for='last_name'>Employee Last Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='last_name' value='{{ $employee->last_name }}'></x-form.input>
                            <x-form.js-error-two id="lastnameErr"></x-form.js-error-two>
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
                            <x-form.js-error-two id="emailErr"></x-form.js-error-two>
                        </x-form.field>
    
                        <x-form.field>
                            <x-form.label for='phone_number'>Employee Telephone <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='phone_number' type='tel' value='{{ $employee->phone_number }}'></x-form.input>
                            <x-form.js-error-two id="phoneErr"></x-form.js-error-two>
                        </x-form.field>
    
                        <x-form.field>
                            <x-form.button class='text-base w-32 py-2' name='Update'></x-form.button>
                        </x-form.field>
    
                    </form>
                </x-layout.card>


    </x-dashboard.layout>
</x-layout.app>