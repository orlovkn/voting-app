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
                    <h3>idea form</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at autem, deleniti illo iure laborum magnam minus qui, recusandae saepe sed ut vero? A consectetur cupiditate eum laborum officia quo sequi tenetur. Ad architecto, consequuntur deserunt ducimus eveniet expedita, inventore itaque nemo omnis perspiciatis quam repudiandae sed voluptas, voluptate voluptatem.
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
    </body>
</html>
