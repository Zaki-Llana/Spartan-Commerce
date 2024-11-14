<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
</style>
</head>
<body>
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <h1>Sign In</h1>
            <label class="text-gray-600">Enter the information below to continue.</label><br><br>
            <x-input-label for="email" :value="__('Username or Email*')" class="text-dark"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Enter your username or email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 relative">
            <x-input-label for="password" :value="__('Password*')" class="text-dark"/>
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" style="background-image: url('{{ asset('images/models/showpass.png') }}'); background-size: 20px; background-repeat: no-repeat; background-position: right 10px center;" placeholder="Enter your password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex mt-2 justify-between mt-2">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-black-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-black-600">{{ __('Remember me') }}</span>
                
            </label>

            <!-- Forgot password -->
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="color: #490B3D;" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>

        <!--Sign In-->
        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ms-3 block w-full flex items-center justify-center" style="background-color: #BD1E51; color: white; border-radius: 3rem;">
                {{ __('Sign In') }}
            </x-primary-button>
        </div>      

        

        <!--Sign up with google-->
        <div class="flex items-center justify-center mt-8">
        <x-primary-button class="ms-3 block w-full flex items-center justify-center" style="background-color: #000000; color: rgb(255, 255, 255); border-radius: 3rem;">
            <img src="{{ asset('images/models/googleicon.png') }}" alt="Google Icon" class="mr-2" style="width: 20px; height: 20px;">    
            {{ __('Sign Up With Google') }}
        </x-primary-button>  
        </div>

        <div class="flex items-center justify-center mt-8">
            <x-primary-button class="ms-3 block w-full flex items-center justify-center" style="background-color: #000000; color: rgb(255, 255, 255); border-radius: 3rem;">
                <img src="{{ asset('images/models/googleicon.png') }}" alt="Google Icon" class="mr-2" style="width: 20px; height: 20px;">    
                
            </x-primary-button>  
            <a href="{{ route('google-auth') }}">
        </div>

        <!--Don't have an account-->
        <div class="flex items-center justify-center mt-2">
            @if (Route::has('password.request'))
                <a class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="color: #490B3D;" href="{{ route('password.request') }}">
                    {{ __('Dont have an account?') }}
                </a>
            @endif
        </div>

    </form>
</div>
</x-guest-layout>
<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const passwordIcon = document.querySelector('.absolute.right-3');

        // Toggle the input type
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text'; // Show the password
            passwordIcon.src = "{{ asset('images/models/hidepass.png') }}"; // Change icon to hide
        } else {
            passwordInput.type = 'password'; // Hide the password
            passwordIcon.src = "{{ asset('images/models/showpass.png') }}"; // Change icon to show
        }
    }
</script>
</body>
</html>