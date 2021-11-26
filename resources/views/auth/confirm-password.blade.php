<x-layouts.auth :title="__('Confirm your action')">


    <div class="mb-6 md:mb-8">
        <x-auth.header class="mb-4">
            {{ __('Hold on') }}
        </x-auth.header>

        <p class="text-center text-md text-gray-700">
            {{ __('Before continue. Please verify that is you.') }}
        </p>
    </div>

    <x-auth.card class="mb-4 md:mb-6">

        <x-form action="{{ route('password.confirm') }}" method="post">

            <div class="mb-4 md:mb-6">
                <x-controls.label required for="password">{{ __('Password') }}</x-controls.label>
                <x-controls.input required name="password" type="password" id="password" />
                <x-form.error for="password" />
            </div>

            <div class="flex justify-end">
                <x-btn class="bg-primary-500 text-white focus:bg-primary-700 hover:bg-primary-600 w-full md:w-auto mb-2 md:mb-0">
                    {{ __('Confirm action') }}
                </x-btn>
            </div>

        </x-form>

    </x-auth.card>

    <div class="text-center">
        <x-btn href="{{ url()->previous() }}"
               class="bg-transparent hover:bg-gray-200 focus:bg-gray-300 text-gray-700 hover:text-black">
            {{ __('Cancel') }}
        </x-btn>
    </div>

</x-layouts.auth>
