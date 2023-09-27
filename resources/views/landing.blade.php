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

        <x-content.about></x-content.about>

        <div class="lg:grid lg:grid-cols-2 lg:gap-4">
            <x-content.review-one></x-content.review-one>
            <x-content.review-two></x-content.review-two>
        </div>
            
        <x-layout.card class='p-4 bg-gray-800'>
            <h4 class="text-2xl text-orange-600 mb-4">Contact Us</h4>
            <form method="POST" action="/" onsubmit="return validateMessage()">
                @csrf

                <div class="md:flex md:gap-6 md:mt-4 md:mb-4">
                    <div class="md:w-1/2">
                        <x-form.field>
                            <x-form.label class="text-white" for='name'>Fullname <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='name'></x-form.input>
                            <x-form.js-error id="nameErr"></x-form.js-error>
                        </x-form.field>
                    </div>
                    <div class="md:w-1/2">
                        <x-form.field>
                            <x-form.label class="text-white" for='email'>Your Email <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                            <x-form.input name='email'></x-form.input>
                            <x-form.js-error id="emailErr"></x-form.js-error>
                        </x-form.field>
                    </div>
                </div>

                <div>
                    <x-form.field>
                        <x-form.label class="text-white" for='comment'>Your Message <i class="fa-solid fa-star-of-life fa-2xs" style="color: #cc0000;"></i></x-form.label>
                        <x-form.textarea name='comment' rows='3'>{{{ old('comment') }}}</x-form.textarea>
                        <x-form.js-error id="commentErr"></x-form.js-error>
                    </x-form.field>

                    <x-form.field class="my-4">
                        <button class="bg-orange-700 text-white w-32 mx-auto py-3 rounded" type="submit">SEND</button>
                    </x-form.field>
                </div>

                <div>
                    @if(session()->has('success'))
                        <x-form.field>
                            <p class="text-center text-white bg-green-500 w-40 py-2 px-3 mx-auto rounded">{{ session('success') }}</p>
                        </x-form.field>
                    @endif
                </div>
            </form>
        </x-layout.card>
    </x-container.main>

    <div class="bg-orange-700 text-center py-8 text-white">
        <p class="m-0">&copy; copyright CMS</p>
    </div>
  
</x-layout.app>