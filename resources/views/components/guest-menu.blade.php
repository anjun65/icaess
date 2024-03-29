<nav x-data="{ open: false }" class="bg-white shadow border-b border-gray-200">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-jet-nav-link>

                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                    Committess

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Committees') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('technical') }}">
                                {{ __('Technical Program Committees') }}
                            </x-jet-dropdown-link>

                            {{-- <x-jet-dropdown-link href="{{ route('local') }}">
                                {{ __('Organizing Committees') }}
                            </x-jet-dropdown-link> --}}
                        </x-slot>
                    </x-jet-dropdown>

                    <x-jet-nav-link href="{{ route('paper') }}" :active="request()->routeIs('paper')">
                        {{ __('Accepted Paper & Poster') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('conference') }}" :active="request()->routeIs('conference')">
                        {{ __('Virtual Conference') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('registration') }}" :active="request()->routeIs('registration')">
                        {{ __('Registration') }}
                    </x-jet-nav-link>
                </div>
            </div>

            @if (Auth::id())
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="hidden sm:flex sm:items-center sm:ml-6 px-10">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>
            @else
                <x-jet-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')" class="hidden sm:flex sm:items-center sm:ml-6 px-10">
                        {{ __('Login') }}
                </x-jet-nav-link>
            @endif
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="{{ route('technical') }}" :active="request()->routeIs('technical')">
                {{ __('Technical Program Committees') }}
            </x-jet-responsive-nav-link>

            {{-- <x-jet-responsive-nav-link href="{{ route('local') }}" :active="request()->routeIs('local')">
                {{ __('Organizing Committees') }}
            </x-jet-responsive-nav-link> --}}

            <x-jet-responsive-nav-link href="{{ route('paper') }}" :active="request()->routeIs('paper')">
                {{ __('Accepted Paper & Poster') }}
            </x-jet-responsive-nav-link>
            
            <x-jet-responsive-nav-link href="{{ route('conference') }}" :active="request()->routeIs('conference')">
                {{ __('Virtual Conference') }}
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="{{ route('registration') }}" :active="request()->routeIs('registration')">
                {{ __('Registration') }}
            </x-jet-responsive-nav-link>

            @if (Auth::id())
                <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
            @else
                <x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-jet-responsive-nav-link>
            @endif

            {{-- <x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                {{ __('Register') }}
            </x-jet-responsive-nav-link> --}}
        </div>
    </div>
</nav>
