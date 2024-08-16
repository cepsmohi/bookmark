<x-master>
    <div class="w-full">
        @if (Route::currentRouteName() == 'users.profile')
            <livewire:users.profile />
        @endif
        @if (Route::currentRouteName() == 'users.password')
            <livewire:users.password />
        @endif
    </div>
</x-master>
