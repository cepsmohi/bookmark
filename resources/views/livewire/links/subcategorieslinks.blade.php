<div>
    <x-link.buttons :$category/>
    <x-link.title :$category :$subcategory/>
    <x-link.links :$links/>
    @if($showCreateForm)
        <x-forms.createlink :$newlink :$pic />
    @endif
    @if($showEditForm)
        <x-forms.editlink :$newlink :$pic />
    @endif
</div>
