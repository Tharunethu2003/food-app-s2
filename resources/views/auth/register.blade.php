<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <!-- Farm to Plate Logo -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Farm to Plate Logo" class="w-32">
            </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="bg-white p-12 rounded-lg shadow-lg space-y-6 max-w-lg mx-auto">
            @csrf

            <!-- Name Input -->
            <div class="space-y-2">
                <x-label for="name" value="{{ __('Name') }}" class="text-gray-700 font-semibold" />
                <x-input id="name" class="block mt-1 w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <!-- Email Input -->
            <div class="space-y-2">
                <x-label for="email" value="{{ __('Email') }}" class="text-gray-700 font-semibold" />
                <x-input id="email" class="block mt-1 w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <!-- Password Input -->
            <div class="space-y-2">
                <x-label for="password" value="{{ __('Password') }}" class="text-gray-700 font-semibold" />
                <x-input id="password" class="block mt-1 w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Password Confirmation -->
            <div class="space-y-2">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-gray-700 font-semibold" />
                <x-input id="password_confirmation" class="block mt-1 w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <!-- Terms and Privacy Policy -->
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required class="mr-2" />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <!-- Already Registered Link / Register Button -->
            <div class="flex items-center justify-between mt-6">
                <a class="text-sm text-green-600 hover:text-green-800 underline" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
