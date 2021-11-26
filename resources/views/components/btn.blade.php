<{{ $is = $attributes->has('href') ? 'a' : 'button' }} {{ $attributes->class('inline-block px-6 py-2 tracking-wider text-xs font-semibold uppercase rounded focus:outline-none transition ease-out') }}>
    {{ $slot }}
</{{ $is }}>
