<div class="frowe gap-2">
    <x-form.ahref
        id="returnButton"
        :href="route('categories')"
        icon="back"
        title="Back"
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
