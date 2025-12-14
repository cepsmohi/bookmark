<a
    href="{!! $link->href !!}" target="_blank"
>
    <div
        class="submit-button buttonhover glass relative group "
    >
        <div class="relative">
            <img
                class="w-10 h-10 md:w-20 md:h-20 rounded-xl drop-shadow"
                src="{{ $link->image }}"
                onerror="this.src='images/public/links/link.svg'"
                alt=""
            />
            <div
                class="hidden absolute left-0 right-0 -bottom-3 fcol group-hover:block z-50"
            >
                <div class="text-center whitespace-nowrap uppercase text-xs truncate">
                    {{ $link->title }}
                </div>
            </div>
        </div>
    </div>
</a>
