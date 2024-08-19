<div class="text-base cursor-pointer print:hidden" title="{{ $title ?? '' }}">
    <div
        class="frow {{ isset($color) ? cssbg($color) : 'transparent' }} {{ $round ?? 'rounded-full' }} print:hidden"
        id="{{ $id ?? $wireclick . 'btn' }}"
        wire:click="{{ $wireclick }}"
        wire:loading.attr="disabled"
        wire:offline.attr="disabled"
        @if (isset($wireconfirm)) wire:confirm="{{ $wireconfirm }}" @endif
    >
        <img
            class="{{ $width ?? 'w-6 h-6' }}"
            src="{{ asset('images/icon/' . $icon . '.svg') }}"
            alt="{{ $icon }}"
            wire:loading.remove
            wire:target="{{ $wireclick }}"
        >
        <img
            class="{{ $width ?? 'w-6 h-6' }}"
            src="{{ asset('images/icon/loading.gif') }}"
            alt="{{ $icon }}"
            wire:loading
            wire:target="{{ $wireclick }}"
        >
    </div>
</div>
