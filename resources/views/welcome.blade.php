<x-master>
    <div class="fcol h-screen">
        <div>
            <header class="frowe gap-2 py-2">
                @if (Route::has('login'))
                    <nav class="frow">
                        @auth
                            <x-form.alink :href="route('home')" tag="Home" />
                        @else
                            <x-form.alink :href="route('login')" tag="Log in" />

                            @if (Route::has('register'))
                                <x-form.alink :href="route('register')" tag="Register" />
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>
        </div>
    </div>
</x-master>
