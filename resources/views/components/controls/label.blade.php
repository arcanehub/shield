@props(['required' => false])

<label {{ $attributes->class('inline-block text-gray-500 text-sm mb-1') }}>
    {{ $slot }} @if($required)<span class="text-red-500">*</span>@endif
</label>
