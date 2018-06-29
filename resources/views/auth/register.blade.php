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
                        <h1 class="text-white font-thin shadow">Register to BeVeace</h1>
                    </div>
                    <div class="flex items-center justify-center mt-16">
                        <div class="max-w-sm w-full">
                            <div class="bg-white py-8 px-8 rounded-lg">
                                <h4 class="text-grey-darker font-normal">Enter your name, e-mail address & password</h4>
                                <form class="mt-8" action="{{ route('register') }}" method="post">
                                    @csrf
                                    
                                    <div class="flex items-center mb-4">
                                        <div class="w-full">
                                            <input class="appearance-none w-full py-2 px-4 border-2 border-grey-lighter rounded leading-tight hover:border-purple-dark {{ $errors->has('name') ? 'border-red' : '' }}" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                                            @if($errors->has('name'))
                                                <span class="text-sm text-pink-dark italic">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <div class="w-full">
                                            <input class="appearance-none w-full py-2 px-4 border-2 border-grey-lighter rounded leading-tight hover:border-purple-dark {{ $errors->has('email') ? 'border-red' : '' }}" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
                                            @if($errors->has('email'))
                                                <span class="text-sm text-pink-dark italic">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center mb-4">
                                        <div class="w-full">
                                            <input class="appearance-none w-full border-2 border-grey-lighter py-2 px-4 leading-tight rounded hover:border-purple-dark {{ $errors->has('password') ? 'border-red' : '' }}" type="password" name="password" placeholder="Password" required>
                                            @if($errors->has('password'))
                                                <span class="text-sm text-pink-dark italic">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="flex items-center">
                                        <div class="w-full">
                                            <input class="appearance-none w-full border-2 border-grey-lighter py-2 px-4 leading-tight rounded hover:border-purple-dark" type="password" name="password_confirmation" placeholder="Retype Password" required>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <button class="bg-teal-dark py-3 rounded text-white w-full hover:bg-teal font-bold" type="submit">Register</button>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-grey text-xs">By clicking Register, you agree to our <a href="#" class="text-purple font-bold no-underline hover:underline">Terms of Use</a> and <a href="#" class="text-purple font-bold no-underline hover:underline">Privacy Policy</a>.</p>
                                    </div>

                                </form>
                            </div>
                            <div class="mt-2 text-center">
                            <p class="text-sm text-grey">Already have an account? <a class="text-white" href="{{ route('login') }}">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
