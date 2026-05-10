<header class="bg-base-100/80 backdrop-blur-sm border-b border-base-300 sticky top-0 z-50">
    <div class="navbar mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h8m-8 6h16"/>
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>How It Works</a></li>
                    <li><a>Join the Guild</a></li>
                    <li><a>For Clients</a></li>
                    <li><a class="btn btn-primary btn-sm mt-2">Generate a Contract</a></li>
                </ul>
            </div>
            <a href="/" wire:navigate class="btn btn-ghost normal-case text-xl">Exposure</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>How It Works</a></li>
                <li><a>Join the Guild</a></li>
                <li><a>For Clients</a></li>
            </ul>
        </div>
        <div class="navbar-end gap-2">
            <div class="hidden lg:flex">
                <a class="btn btn-primary">Generate a Contract</a>
            </div>
            @guest
                <a href="{{ route('login') }}" wire:navigate class="btn btn-ghost">Log in</a>
                <a href="{{ route('register') }}" wire:navigate class="btn">Register</a>
            @endguest
            @auth
                 <a href="{{ route('dashboard') }}" wire:navigate class="btn">Dashboard</a>
            @endauth
        </div>
    </div>
</header>
