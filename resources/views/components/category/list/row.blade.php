<div class="w-full h-12 frowb gap-4 cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 group">
    @php
        $count = $category->subcategories->count();
    @endphp
    <div class="frows gap-4">
        <div class="text-xl w-10 font-black whitespace-nowrap uppercase">
            {{ $category->position }}
        </div>
        <div class="text-xl w-44 font-black whitespace-nowrap uppercase">
            {{ $category->title }}
        </div>
        <x-category.list.row.buttons :$category :$count/>
    </div>
    <div class="text-xl font-black whitespace-nowrap uppercase">
        {{ $count }}
    </div>
</div>
