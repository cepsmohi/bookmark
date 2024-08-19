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
        <x-form.awire
            id="createButton"
            wireclick="$toggle('showCreateForm')"
            icon="plus"
            title="New Category"
            width="w-12"
            round="rounded-xl"
        />
    </div>
    <div class="frows gap-4 py-4">
        <div class="text-2xl font-black whitespace-nowrap uppercase">{{ $category->title }}</div>
    </div>
    <div class="w-full pb-4 border-t fcols">
        @php
            $total = 0;
        @endphp
        @foreach($subcategories as $subcategory)
            @php
                $count = $subcategory->links->count();
                $total += $count;
            @endphp
            <div class="w-full frowb gap-4 cursor-pointer hover:bg-gray-200 group">
                <div class="frows gap-4">
                    <div class="text-xl w-10 font-black whitespace-nowrap uppercase">
                        {{ $subcategory->id }}
                    </div>
                    <div class="text-xl w-44 font-black whitespace-nowrap uppercase">
                        {{ $subcategory->title }}
                    </div>
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
                </div>
                <div class="text-xl font-black whitespace-nowrap uppercase">
                    {{ $count }}
                </div>
            </div>
        @endforeach
        <div class="w-full frowe gap-4 border-t cursor-pointer hover:bg-gray-200 group">
            <div class="frows gap-4">
                TOTAL
            </div>
            <div class="text-xl font-black whitespace-nowrap uppercase">
                {{ $total }}
            </div>
        </div>
    </div>
    @if($showCreateForm)
        <x-forms.createsubcategory :$newsubcategory />
    @endif
    @if($showEditForm)
        <x-forms.editsubcategory :$newsubcategory />
    @endif
    <x-app.offline />
</div>
