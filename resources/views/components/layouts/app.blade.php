@props(['title' => null])
<x-layouts.base :title="$title">

    <div class="py-5">

        <div class="container mx-auto px-4 md:px-6 flex items-center">
            <a href="{{ route('home') }}" class="font-heading font-bold text-black hover:text-primary-500 transition ease-out text-2xl py-2 inline-block">
                {{ config('app.name') }}
            </a>

            <div class="flex items-center ml-auto">

                @auth

                    <div class="text-gray-500 mr-2">
                        <x-dropdown right>
                            <x-slot name="toggle">
                                <x-btn is="span" class="text-gray-500 hover:bg-gray-200 hover:text-black">
                                    {{ auth()->user()->name }}
                                </x-btn>
                            </x-slot>

                            <x-dropdown.item href="#">
                                {{ __('Profile') }}
                            </x-dropdown.item>

                            <x-dropdown.item href="#">
                                {{ __('My tickets') }}
                            </x-dropdown.item>

                            <x-dropdown.item>
                                {{ __('Settings') }}
                            </x-dropdown.item>

                            <hr class="my-1" />

                            <x-form action="{{ route('logout') }}" method="post">
                                <x-dropdown.item>
                                    {{ __('Sign out') }}
                                </x-dropdown.item>
                            </x-form>
                        </x-dropdown>
                    </div>
                @else
                    <x-btn href="{{ route('register') }}" class="text-gray-500 hover:text-black hover:bg-gray-200 mr-2">
                        {{ __('Sign up') }}
                    </x-btn>

                    <x-btn href="{{ route('login') }}" class="text-white bg-primary-500 hover:bg-primary-600">
                        {{ __('Sign in') }}
                    </x-btn>
                @endauth

            </div>

        </div>

    </div>

    <div class="container mx-auto px-4 md:px-6">
        {{ $slot }}
    </div>

</x-layouts.base>
