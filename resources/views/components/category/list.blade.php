<div class="w-full pb-4 border-t fcols">
    @foreach($categories as $category)
        <x-category.list.row :$category/>
    @endforeach
    <div class="w-full frowe gap-4 border-t cursor-pointer hover:bg-gray-200 group">
        <div class="frows gap-4">
            TOTAL
        </div>
        <div class="text-xl font-black whitespace-nowrap uppercase">
            {{ $categories->sum(fn($category) => $category->subcategories->count()) }}
        </div>
    </div>
</div>
