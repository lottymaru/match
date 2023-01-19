<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('ニックネーム')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="gender" :value="__('性別')" />
            <x-text-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender')" required />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="age" :value="__('年齢')" />
            <x-text-input id="age" class="block mt-1 w-full" type="age" name="age" :value="old('age')" required />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="email" :value="__('性別')" />
            <x-text-input id="email" class="block mt-1 w-full" type="age" name="age" :value="old('age')" required />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>
        
        
        
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワード（確認用）')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>