<div>
    <x-ui.logo>
        <x-category.buttons/>
    </x-ui.logo>
    <x-category.list :$categories/>
    @if($showCreateForm)
        <x-forms.createcategory :$newcategory/>
    @endif
    @if($showEditForm)
        <x-forms.editcategory :$newcategory/>
    @endif
    <x-app.offline/>
</div>
