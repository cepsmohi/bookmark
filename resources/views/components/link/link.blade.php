<a
    class="whitespace-nowrap alink uppercase frows gap-2"
    href="{!! $link->href !!}" target="_blank"
>
    <div class="w-6">
        @if($link->position)
            {{ $link->position }}
        @endif
    </div>
    <img
        class="rounded-xl w-12 h-12"
        src="{{ $link->image }}"
        onerror="this.src='images/public/links/link.svg'"
        alt=""
    />
    <span class="text-xl">{{ $link->title }}</span>
</a>
