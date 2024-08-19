<div>
    <div class="frowe gap-2 p-2">
        <x-form.ahref
            id="returnButton"
            :href="route('subcategories', $category)"
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
        <div class="text-xl font-black whitespace-nowrap uppercase">{{ $category->title }}</div>
        <x-deco.icon icon="hline"/>
        <div class="font-bold whitespace-nowrap uppercase">{{ $subcategory->title }}</div>
    </div>
    <div class="fcols flex-wrap gap-1 w-full">
        @foreach($links as $link)
            <div class="w-full frowb gap-4 cursor-pointer hover:bg-gray-200 group">
                <a
                    class="whitespace-nowrap alink uppercase frows gap-2"
                    href="{!! $link->href !!}" target="_blank"
                >
                    <img
                        class="rounded-full shadow"
                        width="40"
                        height="40"
                        src="{{ asset('images/public/links/'.$link->id.'.jpg') }}"
                        onerror="this.src='images/public/links/link.svg'"
                        alt=""
                    />
                    <span class="text-xl">{{ $link->title }}</span>
                </a>
                <div class="hidden group-hover:flex frowe gap-2 pr-4 text-xl w-44 font-black whitespace-nowrap uppercase">
                    <x-form.awire
                        wireclick="editLink({{ $link->id }})"
                        icon="edit"
                        title="edit"
                        color="yellow"
                        width="w-8 h-8"
                    />
                </div>
            </div>
        @endforeach
    </div>
    @if($showCreateForm)
        <x-forms.createlink :$newlink :$pic />
    @endif
    @if($showEditForm)
        <x-forms.editlink :$newlink :$pic />
    @endif
</div>
