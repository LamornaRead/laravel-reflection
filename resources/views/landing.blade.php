<x-layout.app>

    <div class="lg:hidden">
        <x-heading.large>Company Management Services <i class="fa-solid fa-people-roof"></i></x-heading.large>
    </div>
    
    <div class="hidden lg:block">
        <div class="banner" style="background-image: url('/images/company.jpg');"></div>
        <div class="banner-content">
            <div>
                <h1 class="text-orange-600 text-center pt-10 pb-6">Company Management Services</h1>
                <div class="text-center text-white text-lg my-6 tracking-wide">
                    <p class="uppercase text-xl">In need of company management  ? ! ! !</p>
                    <p>Look no further.</p>
                    <p>We will take care of your company, delivered with outstanding customer service.</p>
                    <p>We can take care of all you database and server needs. </p>
                    <p>From updating you employee databases and you own company details.</p>
                    <p>We will take care of everything.</p>
                    <p>So you don't have too.</p>
                </div>
            </div>
        </div>
    </div>

    <x-container.main class="pb-2">
        <div class="lg:hidden my-4">
            <x-layout.card class="p-8 bg-gray-900">
                <div class="border-b border-gray-400">
                    <h2 class="text-sm text-center text-orange-600 uppercase m-0 pb-4">In need of company management</h2>
                </div>
                <div class="text-center text-sm text-white my-6 tracking-wide">
                    <p>Look no further.</p>
                    <p>We will take care of your company, delivered with outstanding customer service.</p>
                    <p>We can take care of all you database and server needs. From updating you employee databases and you own company details.</p>
                    <p>We will take care of everything.</p>
                    <p>So you don't have too.</p>
                </div>
            </x-layout.card>
        </div>

        <div class="lg:pt-8 lg:flex gap-6">
            <div class="lg:w-6/12">
                <x-content.review-one></x-content.review-one>

                <x-content.review-two></x-content.review-two>
            </div>
             
            <div class="lg:w-6/12">
                <x-layout.card class='p-4 bg-orange-500'>
                    <h4 class="text-2xl my-0 text-white">Contact Us</h4>
                    <form method="POST" action="/" onsubmit="return validateMessage()">
                        @csrf

                        <x-form.field>
                            <x-form.label class="text-white" for='name'>Fullname <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='name'></x-form.input>
                            <x-form.js-error id="nameErr"></x-form.js-error>
                        </x-form.field>
    
                        <x-form.field>
                            <x-form.label class="text-white" for='email'>Your Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='email'></x-form.input>
                            <x-form.js-error id="emailErr"></x-form.js-error>
                        </x-form.field>
    
    
                        <x-form.field>
                            <x-form.label class="text-white" for='comment'>Your Message <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.textarea name='comment' rows='5'>{{{ old('comment') }}}</x-form.textarea>
                            <x-form.js-error id="commentErr"></x-form.js-error>
                        </x-form.field>
    
    
                        <x-form.field>
                            <button class="bg-gray-900 w-32 mx-auto py-3 rounded text-white" type="submit">SEND</button>
                        </x-form.field>
    
    
                        @if(session()->has('success'))
    
                        <x-form.field>
                            <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
                        </x-form.field>
    
                        @endif
    
                    </form>
                </x-layout.card>

                <div class="hidden lg:flex justify-center pt-6">
                    <img class="rounded border-t border-b border-r border-l border-gray-900 shadow " src="/images/high-five.jpg" alt="high five">
                </div>
            </div>
        </div>
    </x-container.main>
    <div class="bg-orange-600 text-center py-8 text-white">
        <p class="m-0">&copy; copyright CMS</p>
    </div>
  
</x-layout.app>