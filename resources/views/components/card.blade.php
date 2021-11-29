@props(['is' => 'div'])
<{{ $is }} {{ $attributes->class('block bg-white rounded-md border shadow-sm') }}>
    {{ $slot }}
</{{ $is }}>
