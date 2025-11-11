<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Message -->
        <div class="w-full flex justify-center mb-6 text-2xl">
            <span>Create an account</span>
        </div>

        <!-- Name -->
        <div>
            <x-text-input id="name" class="block mt-1 w-full bgprim focus:ring-0 border-0" placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input id="email" class="block mt-1 w-full bgprim focus:ring-0 border-0" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full bgprim focus:ring-0 border-0" placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-text-input id="password_confirmation" class="block mt-1 w-full bgprim focus:ring-0 border-0" placeholder="Confirm Password"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Redirect login -->
        <div class="flex flex-col items-center justify-end mt-4">
            <a class="underline hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

        <!-- Register button -->
            <x-primary-button class="mt-2 bg-orange-700 w-4/6 flex justify-center text-xl py-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
