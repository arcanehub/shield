@props(['title' => null])
<x-layouts.base :title="$title">
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-md p-4">
            {{ $slot }}
        </div>
    </div>
</x-layouts.base>
