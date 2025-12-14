<div x-data="{open: false}" class="fcols flex-wrap w-full">
    <div
        @click="open = !open"
        class="text-xl mt-4 font-black whitespace-nowrap uppercase cursor-pointer"
    >
        {{ $category->title }}
    </div>
    <div x-show="open" x-cloak class="fcols gap-4 w-full">
        @foreach($category->subcategories as $subCategory)
            <x-home.subcategories :$subCategory/>
        @endforeach
    </div>
</div>
