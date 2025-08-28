<div class="w-full pb-4 border-t fcols">
    @foreach($subcategories as $subcategory)
        <x-subcategory.list.row :$subcategory/>
    @endforeach
    <div class="w-full frowe gap-4 border-t cursor-pointer hover:bg-gray-200 group">
        <div class="frows gap-4">
            TOTAL
        </div>
        <div class="text-xl font-black whitespace-nowrap uppercase">
            {{ $subcategories->sum(fn($sub) => $sub->links->count()) }}
        </div>
    </div>
</div>
