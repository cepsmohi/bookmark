<div class="hidden group-hover:flex frows gap-2 text-xl w-44 font-black whitespace-nowrap uppercase">
    <x-form.ahref
        :href="route('subcategories', $category)"
        icon="links"
        title="Sub Categories"
        color="green"
    />
    <x-form.awire
        wireclick="editCategory({{ $category->id }})"
        icon="edit"
        title="edit"
        color="yellow"
    />
    @if($count == 0)
        <x-form.awire
            wireclick="deleteCategory({{ $category->id }})"
            icon="trash"
            title="delete"
            color="red"
        />
    @endif
</div>
