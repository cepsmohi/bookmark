<div class="frows w-full gap-2">
    <button
        class="{{ $width ?? '' }} {{ cssbg($color ?? 'gray') }} frows gap-2 rounded-xl drop-shadow px-2 py-1 bg-1st group"
        id="sbtn-{{ $form }}"
        form="{{ $form }}"
        type="submit"
        value="Submit">
        <x-deco.icon icon="{{ $icon }}" width="w-6 dark:bg-transparent" />
        <span class="whitespace-nowrap texthover">
            {{ $tag }}
        </span>
    </button>
</div>
