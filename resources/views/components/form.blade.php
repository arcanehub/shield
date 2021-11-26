<form {{ $attributes }} method="{{ $method === 'get' ? 'get' : 'post' }}">
    @if($method !== 'get')
        @csrf
        @if($method !== 'post')
            @method($method)
        @endif
    @endif

    {{ $slot }}
</form>
