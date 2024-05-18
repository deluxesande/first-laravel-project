<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="bg-white shadow-sm">
            <div class="container mx-auto px-6 py-2">
                <div class="flex items-center justify-between">
                    <a class="text-lg font-semibold text-gray-900 no-underline" href="{{ route('note.index') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <div class="flex items-center">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <a class="text-blue-500 no-underline hover:underline"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                <a class="ml-4 text-blue-500 no-underline hover:underline"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <div class="relative">
                                <button class="flex items-center space-x-1 focus:outline-none"
                                    onclick="document.getElementById('navbarDropdown').classList.toggle('hidden')">
                                    <span>{{ Auth::user()->name }}</span>
                                    <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <div id="navbarDropdown"
                                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="navbarDropdown">
                                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <main class="py-4">
        <div class="container mx-auto py-6">
            @yield('content')
        </div>
    </main>
    </div>
</body>

</html>
