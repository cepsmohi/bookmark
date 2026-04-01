<div
    @class([
        'text-base print:hidden',
        $width ?? ''
    ])
    title="{{ $title ?? '' }}"
>
    <button
        @class([
            'p-2 submit-button buttonhover glass',
            'bg-green-500'
        ])
        id="sbtn-{{ $form }}"
        form="{{ $form }}"
        type="submit"
        value="Submit"
    >
        <x-ui.icon icon="{{ $icon }}"/>
        @isset($tag)
            <span class="whitespace-nowrap">
                {{ $tag }}
            </span>
        @endisset
    </button>
</div>
