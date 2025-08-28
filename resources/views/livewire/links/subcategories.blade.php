<div>
    <x-subcategory.buttons/>
    <x-subcategory.title :$category/>
    <x-subcategory.list :$subcategories />
    @if($showCreateForm)
        <x-forms.createsubcategory :$newsubcategory />
    @endif
    @if($showEditForm)
        <x-forms.editsubcategory :$newsubcategory />
    @endif
    <x-app.offline />
</div>
