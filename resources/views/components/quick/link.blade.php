<a
    class="whitespace-nowrap alink uppercase frows gap-2 group-hover:dark:text-black"
    href="{!! $link->href !!}" target="_blank"
>
    <div class="w-6">
        {{ $quick->position }}
    </div>
    <img
        class="rounded-xl w-12 h-12"
        src="{{ $link->image }}"
        onerror="this.src='images/public/links/link.svg'"
        alt=""
    />
    <span class="text-xl">{{ $link->title }}</span>
</a>
