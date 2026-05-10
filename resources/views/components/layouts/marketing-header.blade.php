<header class="bg-base-200">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                <span class="sr-only">Exposure</span>
                <x-application-logo class="h-8 w-auto" />
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-base-content" @click="mobileMenuOpen = true">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-base-content">How It Works</a>
            <a href="#" class="text-sm font-semibold leading-6 text-base-content">Generate a Contract</a>
            <a href="#" class="text-sm font-semibold leading-6 text-base-content">Join the Guild</a>
            <a href="#" class="text-sm font-semibold leading-6 text-base-content">For Clients</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-4">
            @guest
                <a href="{{ route('login') }}" class="btn btn-ghost">Log in</a>
                <a href="{{ route('register') }}" class="btn btn-ghost">Register</a>
            @endguest
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-ghost">Dashboard</a>
                 <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-ghost">
                        Log Out
                    </a>
                </form>
            @endauth
        </div>
    </nav>
</header>
