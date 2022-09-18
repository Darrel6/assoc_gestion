<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        
        
        <div class="row">
            <div class="logo" style="width: 29%">
           
                <a href="/" class="log">
                    <img src="{{ asset('pictures/logo.png') }}" alt="" style="width: 100%; height:100%; margin-right:10px;">
                </a>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 error" :errors="$errors" />
       
            <form method="POST" action="{{ route('login') }}" class="form">
                @csrf
    <div class="fr">
                <!-- Email Address -->
                <div class="lab">
                    <x-label for="email" :value="__('Email')" />
    
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
    
                <!-- Password -->
                <div class="lab">
                    <x-label for="password" :value="__('Password')" />
    
                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>
    
                <!-- Remember Me -->
                <div class="block mt-4 rememb">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4 ">
                    @if (Route::has('password.request'))
                    <div class="forg">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 forg " href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                    @endif
    
                    <x-button class="button">
                        {{ __('Connexion') }}
                    </x-button>
                </div>
            </div>
            </form>
        </div>
  
    </div>
</body>
</html>
   
    
     

