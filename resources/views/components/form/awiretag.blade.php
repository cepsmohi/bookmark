<div
    class="{{ $width ?? '' }} text-base print:hidden"
    title="{{ $title ?? '' }}"
>
    <button
        class="p-2 submit-button glass buttonhover bg-gray-500"
        id="{{ $id ?? $wireclick . 'btn' }}"
        wire:click="{{ $wireclick }}"
        wire:loading.attr="disabled"
        wire:offline.attr="disabled"
        @if (isset($wireconfirm)) wire:confirm="{{ $wireconfirm }}" @endif
    >
        <img
            class="w-6"
            src="{{ asset('images/icon/' . $icon . '.svg') }}"
            alt="{{ $icon }}"
            wire:loading.remove
            wire:target="{{ $wireclick }}"
        >
        <img
            class="w-6"
            src="{{ asset('images/icon/loading.gif') }}"
            alt="{{ $icon }}"
            wire:loading
            wire:target="{{ $wireclick }}"
        >
        <span class="whitespace-nowrap">
            {{ $tag }}
        </span>
    </button>
</div>
