<a
    href="{!! $link->href !!}" target="_blank"
>
    <div
        @class([
            'px-2 py-1 uppercase frows gap-2',
            'text-gray-300 hover:text-black',
            'hover:bg-gray-500',
            'border border-transparent hover:border-gray-500',
            'rounded-xl overflow-hidden'
        ])
    >
        <img
            class="rounded-full shadow"
            width="20"
            height="20"
            src="{{ asset('images/public/links/'.$link->id.'.jpg') }}"
            onerror="this.src='images/public/links/link.svg'"
            alt=""
        />
        <span class="text-xs">{{ $link->title }}</span>
    </div>
</a>
