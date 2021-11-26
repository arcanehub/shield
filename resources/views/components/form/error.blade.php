@props(['for'])

@error($for)
<div class="mt-1 text-xs text-red-500">
    {{ $message }}
</div>
@enderror
