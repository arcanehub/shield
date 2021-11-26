<div {{ $attributes->class('text-center') }}>
    <h2 class="text-md md:text-lg font-bold text-gray-300">
        {{ config('app.name', 'Laravel') }}
    </h2>
    <h1 class="text-3xl md:text-5xl">
        {{ $slot }}
    </h1>
</div>
