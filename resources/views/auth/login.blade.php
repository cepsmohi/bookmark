<x-master>
    <div class="modalback bg-opacity-10">
        <x-form.header />
        <div class="modal">
            <div class="title mb-7">Login</div>
            <form method="POST" action="{{ route('login') }}" id="loginform">
                @csrf
                <x-form.input
                    name="email"
                    :value="old('email')"
                    placeholder="email"
                    autocomplete="email"
                    icon="email"
                    autofocus="autofocus"
                />
                <x-form.input
                    name="password"
                    placeholder="Password"
                    autocomplete="current-password"
                    icon="pass"
                    type="password"
                />
                <x-form.checkbox
                    name="remember"
                    placeholder="Remember Me"
                    :value="old('remember') ? 'checked' : ''"
                />
                <div class="frowb gap-2">
                    <x-form.sbtn
                        form="loginform"
                        icon="login"
                        tag="Login"
                    />
                    <div class="w-full whitespace-nowrap text-xs">
                        @if (Route::has('password.request'))
                            <x-form.alink :href="route('password.request')" tag="Forgot Your Password?" />
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-master>
