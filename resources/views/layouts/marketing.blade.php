<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script>
            (() => {
                const stored = localStorage.getItem('theme');
                const dark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                document.documentElement.dataset.theme = stored ?? (dark ? 'dark' : 'light');
            })();
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700&family=Figtree:wght@400;600&display=swap" rel="stylesheet">


        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .font-serif {
                font-family: 'EB Garamond', serif;
            }
            .font-sans {
                font-family: 'Figtree', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased font-sans bg-base-200 text-base-content min-h-screen">
        <header class="bg-base-100/80 backdrop-blur-sm border-b border-base-300 sticky top-0 z-50">
            <div class="navbar mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="navbar-start">
                    <div class="dropdown">
                        <label tabindex="0" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                        </label>
                        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="#how-it-works">How It Works</a></li>
                            <li><a href="#join">Join the Guild</a></li>
                            <li><a>For Clients</a></li>
                        </ul>
                    </div>
                    <a href="{{ url('/') }}" class="btn btn-ghost text-xl normal-case font-serif">{{ config('app.name') }}</a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a href="#how-it-works">How It Works</a></li>
                        <li><a href="#join">Join the Guild</a></li>
                        <li><a>For Clients</a></li>
                    </ul>
                </div>
                <div class="navbar-end gap-2">
                     @auth
                        <a href="{{ url('/dashboard') }}" wire:navigate class="btn btn-ghost">{{ __('Dashboard') }}</a>
                    @else
                        <a href="{{ route('login') }}" wire:navigate class="btn btn-ghost">{{ __('Log in') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" wire:navigate class="btn btn-primary">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            </div>
        </header>

        <main>
            {{ $slot }}
        </main>

        <footer class="footer p-10 bg-base-300 text-base-content">
            <aside>
                <p class="font-serif text-lg">{{ config('app.name') }}<br/><span class="font-sans text-sm">The guild for performers who work for themselves.</span></p>
            </aside>
            <nav>
                <h6 class="footer-title">Product</h6>
                <a class="link link-hover">Generate a Contract</a>
                <a class="link link-hover">How It Works</a>
                <a class="link link-hover">Join the Guild</a>
            </nav>
            <nav>
                <h6 class="footer-title">Company</h6>
                <a class="link link-hover">About us</a>
                <a class="link link-hover">Terms of Service</a>
                <a class="link link-hover">Privacy Policy</a>
            </nav>
        </footer>
    </body>
</html>
