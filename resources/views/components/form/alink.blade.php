@props(['href', 'tag'])
<a
    href="{{ $href ?? route('welcome') }}"
    class="alink"
>
    {{ $tag ?? 'Tag' }}
</a>
