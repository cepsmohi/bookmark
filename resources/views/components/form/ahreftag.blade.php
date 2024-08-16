<a class="group {{ $width ?? '' }} {{ cssbg($color ?? 'gray') }} frows gap-2 rounded-xl px-2 py-1 drop-shadow"
   href="{{ $href }}">
    <x-deco.icon icon="{{ $icon }}" width="w-6 bg-transparent" />
    <span class="whitespace-nowrap texthover">
        {{ $tag }}
    </span>
</a>
