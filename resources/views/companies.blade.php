<x-app>

    <x-header class="bg-orange-700 text-white p-10 rounded shadow-sm mt-0" name='Company Management Services <i class="fa-solid fa-people-roof"></i>'></x-header>
    
    <x-container-main class="pb-8">

    <div class="lg:grid lg:grid-cols-6 gap-8">
        <x-company-card class="p-8 bg-gray-200 mb-8 col-span-4 h-100">
            <div class="border-b border-gray-400">
                <h2 class="text-center m-0 pb-4">In need of company management?</h2>
            </div>
            <div class="text-center text-base my-6">
                <p>Look no further.</p>
                <p>We will take care of your company, delivered with outstanding customer service.</p>
                <p>We can take care of all you database and server needs. From updating you employee databases and you own company details.</p>
                <p>We will take care of everything.</p>
                <p>So you don't have too.</p>
            </div>
        </x-company-card>

        <x-company-card class='p-6 col-span-2 h-100'>
            <x-header class="text-2xl my-0" name='Contact Us'></x-header>
            <form method="POST" action="/">
                @csrf
                
                <x-form.field>
                    <x-form.label for='name'>Fullname <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='name'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='email'>Your Email<i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='email' type='email'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='email'>Your Email<i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.input name='email' type='email'></x-form.input>
                </x-form.field>

                <x-form.field>
                    <x-form.label for='comment'>Your Message <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                    <x-form.textarea name='comment' rows='5'>{{{ old('comment') }}}</x-form.textarea>
                </x-form.field>


                <x-form.field>
                    <x-form.button class='text-base w-32' name='Send'></x-form.button>
                </x-form.field>


                @if(session()->has('success'))

                <x-form.field>
                    <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
                </x-form.field>

                @endif

            </form>
        </x-company-card>
    </div>

    </x-container-main>
  
</x-app>