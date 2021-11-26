<x-layouts.auth :title="__('Sign in')">

    <x-auth.header class="mb-6 md:mb-8">
        {{ __('Sign in') }}
    </x-auth.header>

    <x-auth.card class="mb-4 md:mb-6">
        <x-form method="post" action="{{ route('login') }}">

            <div class="mb-4 md:mb-6">
                <x-controls.label required for="email">{{ __('Email') }}</x-controls.label>
                <x-controls.input required value="{{ old('email', request('email')) }}" autofocus name="email" type="email" id="email" placeholder="{{ __('example@site.com') }}" />
                <x-form.error for="email" />
            </div>

            <div class="mb-4 md:mb-6">
                <x-controls.label required for="password">{{ __('Password') }}</x-controls.label>
                <x-controls.input required name="password" type="password" id="password" />
                <x-form.error for="password" />
            </div>

            <div class="flex flex-col flex-col-reverse md:flex-row items-center justify-between">
                <x-btn href="{{ route('password.email') }}" class="bg-transparent text-gray-400 hover:bg-gray-200 hover:text-black w-full md:w-auto">
                    {{ __('Forgot password?') }}
                </x-btn>

                <x-btn class="bg-primary-500 text-white focus:bg-primary-700 hover:bg-primary-600 w-full md:w-auto mb-2 md:mb-0">
                    {{ __('Let me in') }}
                </x-btn>
            </div>

        </x-form>
    </x-auth.card>

    <div class="text-center">
        <x-btn href="{{ route('register') }}" class="bg-transparent hover:bg-gray-200 focus:bg-gray-300 text-gray-700 hover:text-black">
            {{ __('Don\'t have an account?') }}
        </x-btn>
    </div>

</x-layouts.auth>
