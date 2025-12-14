<div class="w-full h-12 frowb gap-4 cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 group">
    @php
        $count = $subcategory->links->count();
    @endphp
    <div class="frows gap-4">
        <div class="text-xl w-10 font-black whitespace-nowrap uppercase">
            {{ $subcategory->position }}
        </div>
        <div class="text-xl w-44 font-black whitespace-nowrap uppercase">
            {{ $subcategory->title }}
        </div>
        <x-subcategory.list.row.buttons :$subcategory :$count/>
    </div>
    <div class="text-xl font-black whitespace-nowrap uppercase">
        {{ $count }}
    </div>
</div>
