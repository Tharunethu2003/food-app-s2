<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <!-- Farm to Plate Logo -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Farm to Plate Logo" class="w-32">
            </div>
        </x-slot>

        <!-- Session Status -->
        @session('status')
            <div class="mb-4 text-green-600 font-medium text-sm">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}" class="bg-white p-8 rounded-lg shadow-lg space-y-6">
            @csrf

            <!-- Email Input -->
            <div class="space-y-2">
                <x-label for="email" value="{{ __('Email') }}" class="text-gray-700 font-semibold" />
                <x-input id="email" class="block mt-1 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <!-- Password Input -->
            <div class="space-y-2">
                <x-label for="password" value="{{ __('Password') }}" class="text-gray-700 font-semibold" />
                <x-input id="password" class="block mt-1 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mt-4">
                <x-checkbox id="remember_me" name="remember" class="mr-2" />
                <label for="remember_me" class="text-sm text-gray-600">{{ __('Remember me') }}</label>
            </div>

            <!-- Forgot Password / Register Links -->
            <div class="flex items-center justify-between mt-4">
                <div>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-green-600 hover:text-green-800 underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div>
                    <a class="text-sm text-green-600 hover:text-green-800 underline" href="{{ route('register') }}">
                        {{ __("Don't have an account? Register") }}
                    </a>
                </div>
            </div>

            <!-- Login Button -->
            <div class="flex items-center justify-end mt-6">
                <x-button class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
