<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('styles')

</head>
<body>
    <div id="app">
        <nav class="flex items-center bg-blue-darkest p-6 justify-between">
            <div class="flex items-center flex-no-shrink text-white mr-6">
                <a class="no-underline text-white font-bold tracking-tight text-xl" href="/">BeVeace</a>
            </div>
            <div class="flex items-center">
                <div class="w-full flex-grow">
                    <ul class="flex list-reset">
                        @guest
                            <li class="inline-flex">
                                <a class="flex-1 text-white text-sm no-underline py-2 px-2 hover:text-grey-light hover:underline" href="{{ route('login') }}">Login</a>
                                <a class="flex-1 text-white text-sm no-underline py-2 px-2 bg-purple-dark border border-grey hover:bg-purple-lighter hover:text-purple-darkest" href="{{ route('register') }}">Register</a>
                            </li>
                        @else
                            <li>
                                <dropdown>
                                    <span slot="link" class="appearance-none flex items-center inline-block text-white hover:bg-purple-darkest px-4 py-2 rounded">
                                        <span class="mr-1 text-sm">Bliss Jaspis</span>
                                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span>
                                    <div slot="dropdown" class="bg-white shadow rounded border overflow-hidden">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-sm no-underline block px-3 py-3 border-b text-grey-darkest bg-white hover:text-white hover:bg-purple-darkest whitespace-no-wrap">Logout</a>
                    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </dropdown>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="border-t mt-8">
            <div class="container mx-auto px-4 py-4">
                <div class="flex items-center justify-between text-sm">
                    <div class="text-grey-dark ml-4">
                        &copy; 2018 BeVeace
                    </div>
                    <div>
                        <div class="text-center py-3">
                            <a href="#" class="no-underline text-grey-dark mr-4">Home</a>
                            <a href="#" class="no-underline text-grey-dark mr-4">Careers</a>
                            <a href="#" class="no-underline text-grey-dark">Legal &amp; Privacy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stack('scripts')
</body>
</html>
