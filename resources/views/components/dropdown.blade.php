@props(['right' => false])

<details class="relative">
    <summary>
        {{ $toggle }}
    </summary>

    <div class="fixed top-0 left-0 w-full h-screen details_dropdown_overlay">
    </div>

    <div style="min-width: 150px" class="absolute max-w-xs bg-white rounded shadow-sm border py-1 overflow-hidden @if($right) right-0 @endif ">
        {{ $slot }}
    </div>

</details>
