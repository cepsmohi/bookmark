<div class="w-24 frow relative z-50 gap-2 rounded-full shadow-inner p-2 hover:bg-gray-400 print:hidden">
    <div class="frows gap-4 drop-shadow">
        <div class="frows gap-2 text-base font-bold md:text-xl">
            <a class="text-4xl uppercase drop-shadow"
               href="{{ $href ?? route('welcome') }}"
               wire:navigate>
                <img class="w-24"
                     src="{{ asset('images/logo/logo.svg') }}"
                     alt="">
            </a>
        </div>
    </div>
</div>
