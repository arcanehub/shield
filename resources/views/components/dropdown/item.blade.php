@props(['active' => false, 'is' => null])

<{{ $is ??= $attributes->has('href') ? 'a' : 'button' }} {{ $attributes->class('block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-black transition ease-out') }}>
    {{ $slot }}
</{{ $is }}>
