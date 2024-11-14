<nav x-data="{ open: false }" class="bg-transparent border-none absolute top-0 w-full z-10">
    <style>
        .no-underline {
            text-decoration: none; /* Remove underline */
        }
    </style>

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logos/spartan.png') }}" alt="" class="block h-9 w-auto fill-current">
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ url('/') }}" :active="request()->routeIs('home')" class="no-underline">{{ __('Home') }}</x-nav-link>
                    <x-nav-link href="{{ url('/services') }}" :active="request()->routeIs('services')" class="no-underline">{{ __('Services') }}</x-nav-link>
                    <x-nav-link href="{{ url('/about') }}" :active="request()->routeIs('about')" class="no-underline">{{ __('About') }}</x-nav-link>
                    <x-nav-link href="{{ url('/contact-us') }}" :active="request()->routeIs('contact')" class="no-underline">{{ __('Contact Us') }}</x-nav-link>
                </div>
            </div>
            <!-- Settings Dropdown -->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                @auth
                    <x-nav-link href="{{ Auth::user()->userType == 'admin' ? url('/admin/dashboard') : url('/user/dashboard') }}" :active="request()->routeIs('dashboard')">{{ __('Dashboard') }}</x-nav-link>
                @else
                    <x-nav-link href="{{ url('/login') }}" :active="request()->routeIs('login')" class="no-underline">{{ __('Login') }}</x-nav-link>
                    @if (Route::has('register'))
                        <x-nav-link href="{{ url('/register') }}" :active="request()->routeIs('register')" class="no-underline">{{ __('Register') }}</x-nav-link>
                    @endif
                @endauth
            </div>
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-gray-500">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 18M6 12h12M6 6h12"></path>
                        <path :class="{'hidden': open, 'inline-flex': !open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Responsive Navigation Menu -->
        <div class="sm:hidden" :class="{'block': open, 'hidden': !open}">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link href="{{ url('/') }}" :active="request()->routeIs('home')">{{ __('Home') }}</x-responsive-nav-link>
                <x-responsive-nav-link href="{{ url('/services') }}" :active="request()->routeIs('services')">{{ __('Services') }}</x-responsive-nav-link>
                <x-responsive-nav-link href="{{ url('/about') }}" :active="request()->routeIs('about')">{{ __('About') }}</x-responsive-nav-link>
                <x-responsive-nav-link href="{{ url('/contact-us') }}" :active="request()->routeIs('contact')">{{ __('Contact Us') }}</x-responsive-nav-link>
                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="mt-3 space-y-1">
                        @auth
                            <x-responsive-nav-link href="{{ Auth::user()->userType == 'admin' ? url('/admin/dashboard') : url('/user/dashboard') }}" :active="request()->routeIs('dashboard')">{{ __('Dashboard') }}</x-responsive-nav-link>
                        @else
                            <x-responsive-nav-link href="{{ url('/login') }}" :active="request()->routeIs('login')" class="no-underline">{{ __('Login') }}</x-responsive-nav-link>
                            @if (Route::has('register'))
                                <x-responsive-nav-link href="{{ url('/register') }}" :active="request()->routeIs('register')" class="no-underline">{{ __('Register') }}</x-responsive-nav-link>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
