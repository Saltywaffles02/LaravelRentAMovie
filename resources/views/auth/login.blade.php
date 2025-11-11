<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="fontmain">
        @csrf

        <!-- Message -->
        <div class="w-full flex justify-center mb-6 text-2xl">
            <span>Sign in to your account</span>
        </div>

        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="block mt-1 w-full bgprim focus:ring-0 border-0" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="fontmain block mt-1 w-full bgprim focus:ring-0 border-0 "
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Forgot Password -->
        <div class="flex flex-col items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        <!-- Login button -->
            <x-primary-button class="mt-2 bg-orange-700 w-4/6 flex justify-center text-xl py-4">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Redirect to register -->
        <div class="w-full flex justify-center mt-10">
            <span>Dont have an account yet? <a href="/register" class="text-green-700">Click here!</a></span>
        </div>
    </form>
</x-guest-layout>
