<x-layouts.auth :title="__('Request password reset link')">

    <x-auth.header class="mb-6 md:mb-8">
        {{ __('Reset password') }}
    </x-auth.header>

    <x-auth.card>
        @if(session('status'))
            <x-alert class="bg-green-50 border-green-100 mb-4 md:mb-6">
                {{ session('status') }}
            </x-alert>
        @endif

        <div class="mb-4 md:mb-6">
            <x-controls.label required for="email">{{ __('Email') }}</x-controls.label>
            <x-controls.input required value="{{ old('email', request('email')) }}" autofocus name="email" type="email" id="email" placeholder="{{ __('example@site.com') }}" />
            <x-form.error for="email" />
        </div>

        <div class="flex justify-end">
            <x-btn class="bg-primary-500 text-white focus:bg-primary-700 hover:bg-primary-600 w-full md:w-auto mb-2 md:mb-0">
                {{ __('Send reset link') }}
            </x-btn>
        </div>
    </x-auth.card>

</x-layouts.auth>
