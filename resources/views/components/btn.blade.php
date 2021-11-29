@props(['is' => null])

<{{ $is ??= $attributes->has('href') ? 'a' : 'button' }} {{ $attributes->class('font-heading inline-block px-6 py-2 tracking-wider text-xs font-bold uppercase rounded focus:outline-none cursor-pointer transition ease-out') }}>
    {{ $slot }}
</{{ $is }}>
