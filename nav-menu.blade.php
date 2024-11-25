<nav class="bg-white/50">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Felhasználói menü</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Logo and desktop menu -->
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" src="{{ asset('images/rlogo1.png') }}" alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <x-nav-link href="/" :active="request()->is(['/', 'dashboard'])">Dashboard</x-nav-link>
                        <x-nav-link href="/usermanager" :active="request()->is('usermanager')">Felhasználó kezelő</x-nav-link>
                        <x-nav-link href="/permission-manager" :active="request()->is('permission-manager')">Jogosulság kezelő</x-nav-link>
                        <x-nav-link href="/" :active="request()->is('projects')">Projektek kezelő</x-nav-link>
                    </div>
                </div>
            </div>

            @guest
            <div class="relative ml-3">
                <x-nav-link href="/login" :active="request()->is('login')">Bejelentkezés</x-nav-link>
            </div>
            @endguest

            <!-- Profile and notification button -->
            @auth
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="relative ml-3">
                    <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Felhasználói menü</span>
                        <img class="h-8 w-8 rounded-full" src="" alt="">
                    </button>

                    <!-- Dropdown menu -->
                    <div class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-blue-100 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" id="user-menu" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button">
                        <a href="/profil" class="block px-4 py-2 text-sm text-black" role="menuitem">Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-black">
                                Kijelentkezés
                            </button>
                        </form>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </div>

    <!-- Mobile menu, hidden by default -->
    <div class="hidden sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <x-nav-link href="/" :active="request()->is(['/', 'dashboard'])">Dashboard</x-nav-link>
            <x-nav-link href="/usermanager" :active="request()->is('usermanager')">Felhasználó kezelő</x-nav-link>
            <x-nav-link href="/permission-manager" :active="request()->is('permission-manager')">Jogosulság kezelő</x-nav-link>
            <x-nav-link href="/" :active="request()->is('projects')">Projektek kezelő</x-nav-link>
        </div>
    </div>
</nav>
