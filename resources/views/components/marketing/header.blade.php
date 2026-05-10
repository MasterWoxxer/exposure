<header class="bg-base-300 shadow-lg">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex items-center">
                <a href="{{ route('index') }}" class="text-xl font-bold">
                    Exposure
                </a>
                <nav class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium hover:border-base-content transition-colors">How It Works</a>
                    <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium hover:border-base-content transition-colors">Generate a Contract</a>
                    <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium hover:border-base-content transition-colors">Join the Guild</a>
                    <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium hover:border-base-content transition-colors">For Clients</a>
                </nav>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-ghost">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-sm btn-ghost">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-sm btn-primary ml-2">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</header>
