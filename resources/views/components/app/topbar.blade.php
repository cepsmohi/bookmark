<div class="frowb relative z-50 w-full gap-2 py-2 print:hidden">
    <div class="w-full text-5xl drop-shadow">
        <div class="drop-shadow">
            <a class="frows gap-4 text-4xl drop-shadow"
               href="{{ route('home') }}"
               wire:navigate>
                <img class="w-14 md:w-24"
                     src="{{ asset('images/logo/logo.svg') }}"
                     alt="">
                <div class="hidden lg:frows gap-4">
                    <span class="font-theme uppercase">
                        {{ $_ENV['APP_NAME'] }}
                    </span>
                </div>
            </a>
        </div>
    </div>
    <x-menu.user/>
</div>
