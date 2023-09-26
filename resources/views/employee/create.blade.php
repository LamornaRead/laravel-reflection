<x-layout.app>
    <x-dashboard.layout>
        <x-slot name="top">
            <x-heading.small>Create Employee File</x-heading.small>
            <div class="flex justify-center">
                <x-button.normal class="mt-4" href="/home">Home</x-button.normal>
            </div>
        </x-slot>

        <x-layout.card class="lg:w-7/12 mx-auto my-10 p-3">
            @if(session()->has('success'))
                <x-form.field>
                    <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
                </x-form.field>
            @endif

            <form method="POST" action="/employee/create" onsubmit="return validateEmployee()">
                @csrf
                
                <x-form.flex>
                    <x-slot name="top">
                        <x-form.field>
                            <x-form.label for='first_name'>Employee First Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='first_name'></x-form.input>
                            <x-form.js-error-two id="firstnameErr"></x-form.js-error-two>
                        </x-form.field>
                    </x-slot>
                    <x-slot name="bottom">
                        <x-form.field>
                            <x-form.label for='last_name'>Employee Last Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='last_name'></x-form.input>
                            <x-form.js-error-two id="lastnameErr"></x-form.js-error-two>
                        </x-form.field>
                    </x-slot>
                </x-form.flex>

                <x-form.flex>
                    <x-slot name="top">
                        <x-form.field>
                            <x-form.label for='email'>Employee Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='email'></x-form.input>
                            <x-form.js-error-two id="emailErr"></x-form.js-error-two>
                        </x-form.field>
                    </x-slot>
                    <x-slot name="bottom">
                        <x-form.field>
                            <x-form.label for='phone_number'>Employee Telephone <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='phone_number' type='tel'></x-form.input>
                            <x-form.js-error-two id="phoneErr"></x-form.js-error-two>
                        </x-form.field>
                    </x-slot>
                </x-form.flex>

                <x-form.field>
                    <x-form.label for='company_id'>Company Name <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.select name='company_id'>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : ''}}>{{ $company->name }}</option>
                        @endforeach
                    </x-form.select>
                </x-form.field>

                <x-form.field class="my-4">
                    <x-form.button  name='submit'></x-form.button>
                </x-form.field>
            </form>
        </x-layout.card>
    </x-dashboard.layout>
</x-layout.app>