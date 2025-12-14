<div class="frowe gap-2 pb-2">
    <x-form.ahref
        id="returnButton"
        :href="route('home')"
        icon="back"
        title="Back"
        width="w-12"
        round="rounded-xl"
    />
    <x-form.ahref
        id="quickButtons"
        :href="route('quicks')"
        icon="quick"
        title="Quick Buttons"
        width="w-12"
        round="rounded-xl"
    />
    <x-form.awire
        id="createButton"
        wireclick="$toggle('showCreateForm')"
        icon="plus"
        title="New Category"
        width="w-12"
        round="rounded-xl"
    />
</div>
