<x-master>
    <div class="modalback bg-opacity-10">
        <x-form.header />
        <div class="modal">
            <div class="title mb-7">Reset Password</div>
            <form
                method="POST"
                action="{{ route('password.update') }}"
                id="resetPassword"
            >
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
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
                <x-form.input
                    name="name"
                    :value="old('name')"
                    placeholder="name"
                    autocomplete="name"
                    icon="name"
                    autofocus="autofocus"
                />
                <div class="frowb">
                    <x-form.sbtn
                        form="resetPassword"
                        icon="reset"
                        tag="Reset Password"
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
