<x-layouts.auth :title="__('Email verification')">

    <x-auth.header class="mb-6 md:mb-8">
        {{ __('Verify your email') }}
    </x-auth.header>

    <x-auth.card class="mb-4 md:mb-6">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Before continue, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        <div class="flex justify-end">
            <x-form method="post" action="{{ route('verification.send') }}">
                <x-btn class="bg-primary-500 text-white focus:bg-primary-700 hover:bg-primary-600 w-full md:w-auto mb-2 md:mb-0">
                    {{ __('Resend link') }}
                </x-btn>
            </x-form>
        </div>

    </x-auth.card>

    <x-form class="text-center" method="post" action="{{ route('logout') }}">
        <x-btn class="bg-transparent hover:bg-gray-200 focus:bg-gray-300 text-gray-700 hover:text-black">
            {{ __('Sign out') }}
        </x-btn>
    </x-form>

</x-layouts.auth>
