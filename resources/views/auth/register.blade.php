<x-layouts.auth :title="__('Sign up')">

    <x-auth.header class="mb-6 md:mb-8">
        {{ __('Sign up') }}
    </x-auth.header>

    <x-auth.card class="mb-4 md:mb-6">

        <x-form method="post" action="{{ route('register') }}">
            <div class="mb-4 md:mb-6">
                <x-controls.label required for="name">{{ __('Name') }}</x-controls.label>
                <x-controls.input required value="{{ old('name', request('name')) }}" autofocus name="name" type="name" id="name" placeholder="{{ __('John Doe') }}" />
                <x-form.error for="name" />
            </div>

            <div class="mb-4 md:mb-6">
                <x-controls.label required for="email">{{ __('Email') }}</x-controls.label>
                <x-controls.input required value="{{ old('email', request('email')) }}" name="email" type="email" id="email" placeholder="{{ __('example@site.com') }}" />
                <x-form.error for="email" />
            </div>

            <div class="mb-4 md:mb-6">
                <x-controls.label required for="password">{{ __('Password') }}</x-controls.label>
                <x-controls.input required name="password" type="password" id="password" />
                <x-form.error for="password" />
            </div>

            <div class="mb-4 md:mb-6">
                <x-controls.label required for="password_confirmation">{{ __('Confirm your password') }}</x-controls.label>
                <x-controls.input required name="password_confirmation" type="password" id="password_confirmation" />
            </div>

            <div class="flex justify-end">
                <x-btn class="bg-primary-500 text-white focus:bg-primary-700 hover:bg-primary-600 w-full md:w-auto mb-2 md:mb-0">
                    {{ __('Create account') }}
                </x-btn>
            </div>
        </x-form>

    </x-auth.card>

    <div class="text-center">
        <x-btn href="{{ route('login') }}"
               class="bg-transparent hover:bg-gray-200 focus:bg-gray-300 text-gray-700 hover:text-black">
            {{ __('Already has account?') }}
        </x-btn>
    </div>

</x-layouts.auth>
