<x-guest-layout>


    <x-input-error :messages="$errors->get('name')" class="p-2 mt-2 text-white bg-yellow-400" />
    <x-input-error :messages="$errors->get('email')" class="p-2 mt-2 text-white bg-yellow-400" />
    <x-input-error :messages="$errors->get('password')" class="p-2 mt-2 text-white bg-red-500" />


    <x-input-error :messages="$errors->get('password_confirmation')" class="p-2 mt-2  bg-red-500" />


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert type="error" :message="$error" class="my-4 text-white bg-yellow-300" />
        @endforeach
    @endif

    @if (session('warning_message'))
        <x-alert type="warning" :message="session('warning_message')" class="my-4 text-white bg-red-500 border-red-500" />
    @endif

    @if (session('warning_message'))
        <x-alert type="warning" :message="session('error_message')" class="my-4 text-white bg-yellow-500 border-red-500" />
    @endif


    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            {{--            <x-input-error :messages="$errors->get('name')" class="p-2 mt-2 text-white bg-yellow-300" />--}}
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            {{--            <x-input-error :messages="$errors->get('email')" class="p-2 mt-2 text-white bg-red-500" />--}}
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />
            {{--            <x-input-error :messages="$errors->get('password')" class="p-2 mt-2 text-white bg-red-400" />--}}
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />
            {{--            <x-input-error :messages="$errors->get('password_confirmation')" class="p-2 mt-2  bg-yellow-400" />--}}
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
