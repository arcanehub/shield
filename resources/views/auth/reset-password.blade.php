<x-layouts.auth :title="__('Reset password')">

    <x-auth.header class="mb-6 md:mb-8">
        {{ __('New password') }}
    </x-auth.header>

    <x-auth.card>
        <x-form action="{{ route('password.update') }}" method="post">
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="mb-4 md:mb-6">
                <x-controls.label required for="email">{{ __('Email') }}</x-controls.label>
                <input type="hidden" name="email" value="{{ $email = old('email', request('email')) }}">
                <x-controls.input required value="{{ $email }}" class="pointer-events-none bg-gray-100" disabled name="email" type="email" id="email" placeholder="{{ __('example@site.com') }}" />
                <x-form.error for="email" />
            </div>

            <div class="mb-4 md:mb-6">
                <x-controls.label required for="password">{{ __('Password') }}</x-controls.label>
                <x-controls.input required autofocus name="password" type="password" id="password" />
                <x-form.error for="password" />
            </div>

            <div class="mb-4 md:mb-6">
                <x-controls.label required for="password_confirmation">{{ __('Confirm your password') }}</x-controls.label>
                <x-controls.input required name="password_confirmation" type="password" id="password_confirmation" />
            </div>

            <div class="flex justify-end">
                <x-btn class="bg-primary-500 text-white focus:bg-primary-700 hover:bg-primary-600 w-full md:w-auto mb-2 md:mb-0">
                    {{ __('Update password') }}
                </x-btn>
            </div>

        </x-form>
    </x-auth.card>

</x-layouts.auth>
