<div class="hidden group-hover:flex frows gap-2 text-xl w-44 font-black whitespace-nowrap uppercase">
    <x-form.ahref
        :href="route('subcategories.links', [$subcategory->category, $subcategory])"
        icon="link"
        title="links"
        color="green"
    />
    <x-form.awire
        wireclick="editSubcategory({{ $subcategory->id }})"
        icon="edit"
        title="edit"
        color="yellow"
    />
    @if($count == 0)
        <x-form.awire
            wireclick="deleteSubcategory({{ $subcategory->id }})"
            icon="trash"
            title="delete"
            color="red"
        />
    @endif
</div>
