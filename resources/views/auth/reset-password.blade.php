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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 error" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}" class="form">
            @csrf
            <div class="fr">
                <!-- Email Address -->
              
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="lab">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="lab">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="lab">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4 ">
                <x-button class="button">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
 
    </div>
</body>
</html>