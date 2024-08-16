<div class="frow my-2 w-full">
    <div class="{{ $width ?? 'w-56' }} relative">
        <input
            class="inputcss text-base transition duration-300 focus:border-theme-second"
            type="text"
            required="required"
            wire:model.live="search"
        />
        <span class="frow absolute left-2 top-2 h-6 w-6 text-white drop-shadow">
            <img
                src="{{ asset('images/icon/search.svg') }}"
                alt="search"
            >
        </span>
        <span class="placeholder pointer-events-none absolute left-0 ml-12 text-base text-gray-400 transition duration-300">
            Search
        </span>
    </div>
</div>
