<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="w-full">
        <nav class="bg-purple-200">
            <div class="md:flex items-center justify-between py-2 px-8 md:px-12">
                <div class="flex justify-between items-center">
                   <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                        <a href="{{ route('home-page') }}" class="text-indigo-800">Brand</a>
                   </div>
                    <div class="md:hidden">
                        <button type="button" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                                <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row hidden md:block -mx-2">
                    <x-navbar-item link="{{ route('campaigns.index') }}">Campaigns</x-navbar-item>
                    <x-navbar-item>About</x-navbar-item>
                    <x-navbar-item>Contact</x-navbar-item> 
                </div>
            </div>
        </nav>

        @if (session('success'))
            <x-flash>    
                <x-slot name="title">
                    Success!!!
                </x-slot>
                {{ session('success') }}
            </x-flash>
        @endif

        @if ($errors->any())
            <x-flash type="error">    
                <x-slot name="title">
                    Validation errors!
                </x-slot>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </x-flash>
        @endif

        {{-- 
        <x-flash type="warning">    
            <x-slot name="title">
                Warning!!!
            </x-slot>
            Subscription expired!!!
        </x-flash>
         --}}

        <div class="flex bg-pink-200 h-screen">
            {{ $slot }}
            
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover" style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80)">
                    <div class="h-full bg-black opacity-25"></div>
                </div>
            </div>
        </div>
 
    </div>
    
</body>

</html>
