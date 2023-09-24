<x-layout.app>

    <div class="lg:hidden">
        <x-header class="bg-orange-700 text-white p-10 mt-0 mb-0" name='Company Management Services <i class="fa-solid fa-people-roof"></i>'></x-header>
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

    <x-container-main class="pb-2">
        <div class="lg:hidden my-4">
            <x-company-card class="p-8 bg-gray-900">
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
            </x-company-card>
        </div>

        <div class="lg:pt-8 lg:flex gap-6">
            <div class="lg:w-6/12">
                <x-company-card class="p-6 bg-gray-900 text-white mb-6 tracking-wide">
                    <h4 class="text-orange-600 pb-4">Customer Review</h4>
                    <x-para>
                        I recently hired CMS for my company and I can honestly say that it was the best decision I ever made.
                        Their service provided me with everything I needed to take my business to the next level.
                        They provided me with knowledgeable and experienced staff who had the skills and knowledge to help me with all aspects of my business. 
                    </x-para>

                    <x-para>
                        They were always available and willing to answer any questions I had and provided helpful advice and guidance.
                        They were also incredibly organized and efficient, ensuring that all tasks were completed quickly and accurately.
                        The management service was also great at keeping me up to date on the latest trends and developments in the industry.
                        Overall, I can confidently say that my business has grown significantly since hiring this management service, and I am extremely satisfied with the results.
                    </x-para>
                    
                    <x-star></x-star>
                 </x-company-card>

                 <x-company-card class="p-6 bg-gray-900 text-white mb-6 tracking-wide">
                    <h4 class="text-orange-600 pb-4">Customer Review</h4>

                    <x-para>
                        I recently had the pleasure of working with Company Management Services for the day-to-day management of our small business. 
                        I was extremely impressed with their services, which made running our business much easier. 
                        They provided us with all the necessary tools and resources to efficiently manage our operations and keep track of our financials. 
                    </x-para>

                    <x-para>
                        They were very knowledgeable and helpful, and made sure we had all the information we needed. 
                        The team was always available for any questions we had and was very responsive to our requests. 
                        We are grateful to have had the opportunity to work with such a great company and would highly recommend their services to 
                        anyone looking for a reliable and effective management solution.
                    </x-para>

                    <x-star></x-star>
                 </x-company-card>
            </div>
             
            <div class="lg:w-6/12">
                <x-company-card class='p-4 bg-orange-500'>
                    <x-header class="text-2xl my-0 text-white" name='Contact Us'></x-header>
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
                </x-company-card>

                <div class="hidden lg:flex justify-center pt-6">
                    <img class="rounded border-t border-b border-r border-l border-gray-900 shadow " src="/images/high-five.jpg" alt="high five">
                </div>
            </div>
        </div>
    </x-container-main>
    <div class="bg-orange-600 text-center py-8 text-white">
        <p class="m-0">&copy; copyright CMS</p>
    </div>
  
</x-layout.app>