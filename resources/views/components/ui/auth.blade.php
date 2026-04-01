<div class="absolute right-0 frowe gap-2">
    @if (Route::has('login'))
        @auth
            <x-form.ahref
                icon="home"
                :href="route('home')"
                width="w-12"
            />
        @else
            <x-form.ahref
                icon="login"
                :href="route('login')"
                width="w-12"
            />
            @if (Route::has('register'))
                <x-form.ahref
                    icon="register"
                    :href="route('register')"
                    width="w-12"
                />
            @endif
        @endauth
    @endif
</div>
