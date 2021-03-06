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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app" class="font-sans">
        
        <div class="w-full h-screen moonlit-asteroit">
            <div class="container mx-auto px-8 py-8">
                <div class="mt-16">
                    <div class="flex items-center justify-center">
                        <h1 class="text-white font-thin shadow">Reset your password</h1>
                    </div>
                    <div class="flex items-center justify-center mt-16">
                        <div class="max-w-sm w-full">
                            <div class="bg-white py-8 px-8 rounded-lg">
                                <h4 class="text-grey-darker font-normal">To reset your password, enter the email address you use to login.</h4>
                                <form class="mt-8" action="{{ route('password.request') }}" method="post">
                                    @csrf
                                    
                                    <div class="flex items-center">
                                        <div class="w-full">
                                            <input class="appearance-none w-full py-2 px-4 border-2 border-grey-lighter rounded leading-tight hover:border-purple-dark {{ $errors->has('email') ? 'border-red' : '' }}" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
                                            @if($errors->has('email'))
                                                <span class="text-sm text-pink-dark italic">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <button class="bg-teal-dark py-3 rounded text-white w-full hover:bg-teal font-bold" type="submit">Send Reset Password Link</button>
                                    </div>

                                </form>
                            </div>
                            <div class="mt-2 text-center">
                            <p class="text-sm text-grey">Nevermind! <a class="text-white" href="{{ route('login') }}">Take me back to login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
