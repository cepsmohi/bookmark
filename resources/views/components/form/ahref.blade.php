<div class="text-base print:hidden" title="{{ $title ?? '' }}">
    <div
        class="frow {{ isset($color) ? cssbg($color) : 'transparent' }} {{ $round ?? 'rounded-full' }} print:hidden"
    >
        <a class="w-full h-full"
           id="{{ $id ?? randtxt() }}"
           href="{{ $href }}"
           title="{{ $title ?? '' }}"
           wire:navigate
        >
            <img
                class="{{ $width ?? 'w-6 h-6' }}"
                src="{{ asset('images/icon/' . $icon . '.svg') }}"
                alt="{{ $icon }}"
            >
        </a>
    </div>
</div>
