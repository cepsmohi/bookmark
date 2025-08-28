<div>
    <div class="frowe gap-2 p-2">
        <x-form.ahref
            id="returnButton"
            :href="route('categories')"
            icon="back"
            title="Back"
            width="w-12"
            round="rounded-xl"
        />
    </div>
    <x-quick.links :$quicks/>
    @if($showEditForm)
        <x-quick.editform :$squick />
    @endif
</div>
