<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-small">
        <div class="min-h-screen bg-gray-100">
            <header class="flex items-center justify-between px-8 py-4">
                <a href="#"><img src="{{ asset('img//logo.svg')  }}" alt=""></a>
                <div class="flex items-center">
                    @if (Route::has('login'))
                        <div class="px-6 py-4">
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </a>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                    <a href="">avatar</a>
                </div>
            </header>

            <main class="container mx-auto max-w-custom flex">
                <div class="w-70 mr-5">
                    <div class="border-2 border-gray rounded-xl mt-16">
                        <div class="text-center px-1 p-2 pt-6">
                            <h3 class="font-semibold text-base">Add an idea</h3>
                            <p class="text-xs mt-4">
                                @auth
                                    Add a new idea
                                @else
                                    Please login to create an idea
                                @endauth
                            </p>

                            @auth
                                <livewire:create-idea />
                            @else
                                <div class="my-6 text-center">
                                    <a
                                        href="{{ route('login') }}"
                                        class="inline-block justify-center w-1/2 h-11 text-xs space-x-3 font-semibold px-6 py-3 bg-blue hover:bg-blue-hover text-white rounded-xl"
                                    >
                                        Login
                                    </a>
                                    <a
                                        href="{{ route('register') }}"
                                        class="inline-block justify-center w-1/2 h-11 text-xs space-x-3 font-semibold px-6 py-3 bg-gray text-white rounded-xl mt-4"
                                    >
                                        Sign Up
                                    </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="w-175">
                    <nav class="flex items-center justify-between text-xs">
                        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                            <li><a href="" class="border-b-4 pb-3 border-blue">All ideas (87)</a></li>
                            <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering (6)</a></li>
                            <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In progress (1)</a></li>
                        </ul>

                        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                            <li><a href="" class="border-b-4 pb-3 border-blue">Implemented (87)</a></li>
                            <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed (6)</a></li>
                        </ul>
                    </nav>

                    <div class="mt-8">
                        {{ $slot  }}
                    </div>
                </div>
            </main>
        </div>

        @livewireScripts
    </body>
</html>
