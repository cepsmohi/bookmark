<div class="frowb relative z-50 w-full gap-2 py-2 pb-6 md:pb-12 print:hidden">
    <div class="w-full text-5xl drop-shadow">
        <div class="drop-shadow">
            <a class="frows gap-4 text-2xl md:text-5xl drop-shadow"
               href="{{ route('home') }}"
               wire:navigate>
                <img class="w-14 md:w-24"
                     src="{{ asset('images/logo/logo.svg') }}"
                     alt=""
                />
                <div class="font-theme uppercase text-[#f7474f]">
                    @php
                        $words = preg_split('/\s+/', $_ENV['APP_NAME']);
                    @endphp
                    <div>{{ $words[0] }}</div>
                    <div>{{ $words[1] }}</div>
                </div>
            </a>
        </div>
    </div>
    <div class="frowe gap-2">
        <x-form.ahref
            id="categoryButton"
            :href="route('categories')"
            icon="asset"
            title="Categories"
            width="w-12"
            round="rounded-xl"
        />
        <form id="logoutform" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="submit-button glass buttonhover" id="sbtn-logoutform" form="logoutform" type="submit"
                    value="Submit">
                <x-deco.icon icon="logout" width="w-12"/>
            </button>
        </form>
    </div>
</div>
