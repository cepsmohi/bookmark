<div class="w-full frowb gap-4 cursor-pointer hover:bg-gray-200 group">
    @php
        $count = $category->subcategories->count();
    @endphp
    <div class="frows gap-4 group-hover:dark:text-black">
        <div class="text-xl w-10 font-black whitespace-nowrap uppercase">
            {{ $category->position }}
        </div>
        <div class="text-xl w-44 font-black whitespace-nowrap uppercase">
            {{ $category->title }}
        </div>
        <x-category.list.row.buttons :$category :$count/>
    </div>
    <div class="text-xl font-black whitespace-nowrap uppercase group-hover:dark:text-black">
        {{ $count }}
    </div>
</div>
