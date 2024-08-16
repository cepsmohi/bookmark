<div
    class="{{ $width ?? '' }} text-base print:hidden"
    title="{{ $title ?? '' }}"
>
    <button
        class="frows {{ cssbg($color ?? 'theme') }} cursor-pointer gap-2 rounded-full p-1 drop-shadow md:rounded-xl md:px-2 md:py-1"
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
