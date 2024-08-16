<x-master>
    <div class="modalback bg-opacity-10">
        <x-form.header />
        <div class="modal">
            <div class="title mb-7">Reset Password</div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form
                method="POST"
                action="{{ route('password.update') }}"
                id="resetPassword"
            >
                @csrf
                <x-form.input
                    name="email"
                    :value="old('email')"
                    placeholder="email"
                    autocomplete="email"
                    icon="email"
                />
                <x-form.sbtn
                    form="resetPassword"
                    icon="link"
                    tag="Send Reset Link"
                />
            </form>
        </div>
    </div>
</x-master>
