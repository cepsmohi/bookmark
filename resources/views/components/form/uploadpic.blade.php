<div
    x-data
    class="frow relative mb-7 {{ $width ?? 'w-full'}} {{ $roundcss ?? 'rounded-full' }} overflow-hidden"
>
    @isset($pic)
        <img class="{{ $roundcss ?? 'rounded-full' }} w-full  {{ $height ?? 'h-28' }} cursor-pointer shadow-2xl"
             id="imagediv"
             src="{{ $pic->temporaryUrl() }}"
             alt=""
             onerror="this.src='{{ asset('images/public/avatars/avatar.png') }}';"
             wire:loading.remove
             wire:target="{{ $wiretarget }}"
             @click="document.getElementById('pic').click()">
        <img class="w-28  h-28 {{ $roundcss ?? 'rounded-full' }}"
             src="{{ asset('images/icon/loading.gif') }}"
             alt=""
             wire:loading
             wire:target="{{ $wiretarget }}">
    @else
        <img class="{{ $roundcss ?? 'rounded-full' }} w-full  {{ $height ?? 'h-28' }} cursor-pointer shadow-2xl"
             id="imagediv"
             src="{{ $src }}"
             alt=""
             onerror="this.src='{{ asset('images/public/avatars/avatar.png') }}';"
             wire:loading.remove
             wire:target="{{ $wiretarget }}"
             @click="document.getElementById('pic').click()">
    @endisset
    <input id="pic"
           type="file"
           wire:model="pic"
           accept="image/png, image/jpeg, image/jpg, image/webp"
           placeholder="pic"
           hidden />
    @error('pic')
    <div
        class="absolute -bottom-4 left-0 w-full truncate text-left text-xs text-red-700">
        {{ $message }}</div>
    @enderror
</div>
