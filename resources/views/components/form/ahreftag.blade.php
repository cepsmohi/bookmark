<a
    class="frows {{ cssbg($color ?? 'theme') }} cursor-pointer gap-2 rounded-full p-1 drop-shadow md:rounded-xl md:px-2 md:py-1"
    href="{{ $href }}"
    @isset($target)
        target="{{ $target }}"
    @endisset
>
    <img
        class="w-6"
        src="{{ asset('images/icon/' . $icon . '.svg') }}"
        alt="{{ $icon }}"
    >
    <span class="whitespace-nowrap">
        {{ $tag }}
    </span>
</a>
