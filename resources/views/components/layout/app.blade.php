<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>C M S</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2af8b76caa.js" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    C M S <i class="fa-solid fa-people-roof"></i>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>   
                    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="md:hidden mt-2">
                        @guest
                            @if (Route::has('login'))
                                <button><a href="{{ route('login') }}" class="no-underline text-gray-900 py-2 px-6">{{ __('Login') }}</a></button>
                            @endif
                        @else
                             
                            <p class="pl-2 m-0 uppercase text-orange-600">{{ Auth::user()->name }}</p>
                            <x-dropdown.item href="/" :active="request()->routeIs('home')">All Info</x-dropdown.item>
                            <x-dropdown.item href="/admin/all-companies" :active="request()->routeIs('all-companies')">All Companies</x-dropdown.item>
                            <x-dropdown.item href="/admin/all-employees" :active="request()->routeIs('all-employees')">All Employees</x-dropdown.item>
                            <x-dropdown.item href="/companies/create" :active="request()->routeIs('create-company')">Add Company</x-dropdown.item>
                            <x-dropdown.item href="/employee/create" :active="request()->routeIs('create-employee')">Add Employee</x-dropdown.item>
                            <x-dropdown.item href="{{ route('logout') }}"                                 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </x-dropdown.item>
                    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>


                <div class="hidden md:block">
                    @guest
                        @if (Route::has('login'))
                            <button><a href="{{ route('login') }}" class="no-underline text-gray-900 py-2 px-6">{{ __('Login') }}</a></button>
                        @endif
                     @else
                        <x-dropdown.nav>
                            <x-slot name="trigger">
                                <button class="py-2 px-6">{{ Auth::user()->name }} <i class="fa-solid fa-chevron-down fa-xs"></i></button>
                            </x-slot>
                            
                            <x-dropdown.item href="/" :active="request()->routeIs('home')">All Info</x-dropdown.item>
                            <x-dropdown.item href="/admin/all-companies" :active="request()->routeIs('all-companies')">All Companies</x-dropdown.item>
                            <x-dropdown.item href="/admin/all-employees" :active="request()->routeIs('all-employees')">All Employees</x-dropdown.item>
                            <x-dropdown.item href="/companies/create" :active="request()->routeIs('create-company')">Add Company</x-dropdown.item>
                            <x-dropdown.item href="/employee/create" :active="request()->routeIs('create-employee')">Add Employee</x-dropdown.item>
                            <x-dropdown.item href="{{ route('logout') }}"                                 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </x-dropdown.item>
                    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </x-dropdown.nav>
                    @endguest
                </div>
            </div>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </div>
    <script src="{{ asset('js/forms.js') }}"></script>
</body>
</html>
