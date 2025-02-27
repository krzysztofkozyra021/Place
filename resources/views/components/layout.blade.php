<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="{{asset('/assets/css/navbar.css')}}" rel="stylesheet">
    <style>
        .font-lato { font-family: 'Lato', sans-serif; }
    </style>
</head>
<body class="h-full">

<div class="min-h-full">
    <nav class="bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img class="w-2/5" src="{{asset('/assets/img/logo.png')}}" alt="Place">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-nav-link href="{{ route('home') }}" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="{{ route('explore') }}" :active="request()->is('explore')">Explore</x-nav-link>
                            <x-nav-link href="{{ route('collections') }}" :active="request()->is('collections')">Collections</x-nav-link>
                            <x-nav-link href="{{ route('top-places') }}" :active="request()->is('top-places')">Top places</x-nav-link>
                            <x-nav-link href="{{ route('near-me') }}" :active="request()->is('near-me')">Near me</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button" class="relative rounded-full bg-orange-500 p-1 text-white hover:bg-orange-400 focus:ring-2 focus:ring-orange-300 focus:ring-offset-2 focus:ring-offset-orange-100 focus:outline-hidden font-lato">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-orange-500 text-sm focus:ring-2 focus:ring-orange-300 focus:ring-offset-2 focus:ring-offset-orange-100 focus:outline-hidden font-lato" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="size-8 rounded-full" src="" alt="">
                                </button>
                            </div>

                            <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-orange-100 focus:outline-hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 font-lato font-medium hover:bg-orange-50 hover:text-orange-500" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 font-lato font-medium hover:bg-orange-50 hover:text-orange-500" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 font-lato font-medium hover:bg-orange-50 hover:text-orange-500" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-black hover:bg-orange-400 hover:text-white focus:ring-2 focus:ring-orange-300 focus:ring-offset-2 focus:ring-offset-orange-100 focus:outline-hidden font-lato" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <x-nav-link-mobile href="{{ route('home') }}" :active="request()->is('/')">Home</x-nav-link-mobile>
                <x-nav-link-mobile href="{{ route('explore') }}" :active="request()->is('explore')">Explore</x-nav-link-mobile>
                <x-nav-link-mobile href="{{ route('collections') }}" :active="request()->is('collections')">Collections</x-nav-link-mobile>
                <x-nav-link-mobile href="{{ route('top-places') }}" :active="request()->is('top-places')">Top places</x-nav-link-mobile>
                <x-nav-link-mobile href="{{ route('near-me') }}" :active="request()->is('near-me')">Near me</x-nav-link-mobile>
            </div>
            <div class="border-t border-orange-200 pt-4 pb-3">
                <div class="flex items-center px-5">
                    <div class="shrink-0">
                        <img class="size-10 rounded-full" src="" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base/5 font-semibold text-gray-700 font-lato">Cysiu</div>
                        <div class="text-sm font-medium text-gray-500 font-lato">cysiu@example.com</div>
                    </div>
                    <button type="button" class="relative ml-auto shrink-0 rounded-full bg-orange-500 p-1 text-white hover:bg-orange-400 focus:ring-2 focus:ring-orange-300 focus:ring-offset-2 focus:ring-offset-orange-100 focus:outline-hidden font-lato">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </button>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-600 hover:bg-orange-400 hover:text-white font-lato">Your Profile</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-600 hover:bg-orange-400 hover:text-white font-lato">Settings</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-600 hover:bg-orange-400 hover:text-white font-lato">Sign out</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 font-lato">{{ $heading }}</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 font-lato">
            {{ $slot }}
        </div>
    </main>
</div>
</body>
</html>
