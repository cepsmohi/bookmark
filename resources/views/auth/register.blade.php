<x-master>
    <div class="modalback bg-opacity-10">
        <x-form.header />
        <div class="modal">
            <div class="title mb-7">Register</div>
            <form
                method="POST"
                action="{{ route('register') }}"
                id="registerform"
            >
                @csrf
                <x-form.input
                    name="name"
                    :value="old('name')"
                    placeholder="name"
                    autocomplete="name"
                    icon="name"
                    autofocus="autofocus"
                />
                <x-form.input
                    name="email"
                    :value="old('email')"
                    placeholder="email"
                    autocomplete="email"
                    icon="email"
                />
                <x-form.input
                    name="password"
                    placeholder="Password"
                    autocomplete="new-password"
                    icon="pass"
                    type="password"
                />
                <x-form.input
                    name="password_confirmation"
                    placeholder="Confirm Password"
                    autocomplete="new-password"
                    icon="pass"
                    type="password"
                />
                <div class="frowb">
                    <x-form.sbtn
                        form="registerform"
                        icon="register"
                        tag="Register"
                    />
                    <div class="text-xs text-red-400 frowe">
                        <x-form.alink
                            :href="route('login')"
                            tag="Login?"
                        />
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-master>
