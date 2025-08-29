<a
    href="{!! $link->href !!}" target="_blank"
>
    <div
        class="relative group fcol"
    >
        <div
            @class([
                'p-1 uppercase',
                'hover:bg-gray-500',
                'rounded-xl'
            ])
        >
            <img
                class="w-10 h-10 md:w-20 md:h-20 rounded-lg drop-shadow"
                src="{{ $link->image }}"
                onerror="this.src='images/public/links/link.svg'"
                alt=""
            />
        </div>
        <div class="hidden group-hover:block relative">
            <div class="absolute -translate-x-1/2 whitespace-nowrap text-[7px] md:text-[10px] font-bold text-white uppercase">
                {{ $link->title }}
            </div>
        </div>
    </div>
</a>
