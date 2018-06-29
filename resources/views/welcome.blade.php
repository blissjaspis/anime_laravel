<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BeVeace</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app" class="font-sans purple-bliss">
            <div class="container mx-auto py-4 px-4">
                <div class="flex items-center justify-between">
                    <div class="ml-8">
                        <h1 class="text-white tracking-tight font-thin">BeVeace</h1>
                    </div>
                    <div class="text-sm">
                        @auth
                            <a class="no-underline py-2 px-4 text-white hover:text-teal-lightest uppercase" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="no-underline py-2 px-4 text-white hover:text-teal-lightest" href="{{ route('login') }}">Login</a>
                            <a class="no-underline py-2 px-4 border rounded-full text-white hover:bg-teal" href="{{ route('register') }}" style="border-color:#64a2af">Register</a>
                        @endauth
                    </div>
                </div>

                <div class="flex items-center h-screen justify-center">
                    <h1 class="text-grey-lightest text-5xl font-normal leading-tight tracking-wide">Watch with ❤️</h1>
                </div>
            </div>

            <div class="container mx-auto px-4 py-4">
                <div class="flex items-center justify-between text-sm">
                    <div class="text-grey ml-4">
                        &copy; 2018 BeVeace - Designed with ❤️ in Jakarta, ID
                    </div>
                    <div>
                        <div class="text-center py-3">
                            <a href="#" class="no-underline text-grey mr-4">Careers</a>
                            <a href="#" class="no-underline text-grey">Legal &amp; Privacy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
