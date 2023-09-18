<x-app>

    <x-header class="bg-orange-700 text-white p-10 rounded shadow-sm mt-0" name='Company Management Services <i class="fa-solid fa-people-roof"></i>'></x-header>
    
    <x-container-main class="pb-8">

    <div class="md:grid md:grid-cols-6 gap-8">
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
            <form class="flex flex-col mt-8" action="">
                
                <x-label for='name' name='Fullname'></x-label>
                <x-input id='name' name='name' type='text'></x-input>

                <x-label for='email' name='Your email'></x-label>
                <x-input id='email' name='email' type='email'></x-input>
                

                <x-label for='message' name='Your message'></x-label>
                <x-textarea id='message' name='message' rows='5'></x-textarea>
                
                <x-input-button value='send'></x-input-button>
            </form>
        </x-company-card>
    </div>



    </x-container-main>
  
</x-app>