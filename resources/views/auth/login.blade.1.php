@extends('layouts.app')

@section('content')
<main class="container mx-auto pt-8">
    <div class="flex items-center justify-center">
        <div class="w-full max-w-sm">

            <h3 class="text-grey-dark mb-4">Form Login</h3>

            <form class="appearance-none border p-6 shadow-md rounded" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="flex items-center mb-6">
                    <div class="w-1/3">
                        <label class="block text-grey font-bold text-right mb-0 pr-4" for="email">{{ __('E-mail Address') }}</label>
                    </div>
                    <div class="w-2/3">
                        <input id="email" class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-purple-dark rounded w-full py-2 px-4 text-grey-darker leading-tight {{ $errors->has('email') ? ' mb-2 border-red' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        @if($errors->has('email'))
                            <span class="text-sm text-pink-dark italic">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                
                <div class="flex items-center mb-6">
                    <div class="w-1/3">
                        <label class="block text-grey font-bold text-right mb-0 pr-4" for="password">{{ __('Password') }}</label>
                    </div>
                    <div class="w-2/3">
                        <input class="bg-grey-lighter appearance-none border-2 border-grey-lighter hover:border-purple-dark rounded w-full py-2 px-4 leading-tight {{ $errors->has('password') ? ' mb-2 border-red' : '' }}" type="password" name="password" id="password" required>
                        @if($errors->has('password'))
                            <span class="text-sm text-pink-dark italic">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                
                <div class="flex items-center mb-4">
                    <div class="w-1/3"></div>
                    <div class="w-2/3">
                        <div class="flex items-center justify-between">
                            <button class="bg-purple text-white font-bold hover:bg-purple-light py-2 px-4 rounded leading-tight" type="submit">Login</button>
                            <a class="text-xs font-bold no-underline text-purple hover:text-purple-light hover:underline" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</main>
@endsection
