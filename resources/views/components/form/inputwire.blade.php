<div class="{{ $width ?? 'w-full' }} {{ $mb ?? 'mb-7' }} relative">
    <input
        class="@error($name) bg-red-200 @enderror inputcss focus:border-1st {{ $extraclass ?? '' }}"
        id="{{ $name }}"
        type="{{ $type ?? 'text' }}"
        @isset($step) step="{{ $step }}" @endisset
        wire:model.blur="{{ $name }}"
        @isset($wirekeydown) wire:keydown.enter="{{ $wirekeydown }}" @endisset
        @isset($wirekeyup) wire:keyup.enter="{{ $wirekeyup }}" @endisset
        @isset($onchange) wire:change="{{ $onchange }}" @endisset
        @isset($autocomplete) autocomplete="{{ $autocomplete }}" @endisset
        @if((isset($required) && !$required) || (isset($type) && $type == 'date')) @else required @endisset
        @isset($value) value="{{ $value }}" @endisset
        {{ $disabled ?? '' }}
        {{ $autofocus ?? '' }}/>
    @isset($icon)
        <span class="frow absolute left-2 top-2 h-6 w-6 text-white drop-shadow">
            <img src="{{ asset('images/icon/' . $icon . '.svg') }}"
                 alt="{{ $icon }}">
        </span>
    @endisset
    <span class="placeholder pointer-events-none absolute left-0 ml-12 text-base text-gray-400 transition duration-300">
        {{ $placeholder ?? '' }}
    </span>
    @error($name)
    <div class="{{ $position ?? '-bottom-4 left-0' }} absolute w-full truncate text-left text-xs text-red-700">
        {{ $message }}
    </div>
    @enderror
</div>
