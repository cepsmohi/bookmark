<x-master>
    <div class="w-full">
        <x-app.topbar />
        <x-home.buttons />
        @if (Route::currentRouteName() == 'categories')
            <livewire:links.categories />
        @endif
        @if (Route::currentRouteName() == 'subcategories')
            <livewire:links.subcategories :$category />
        @endif
        @if (Route::currentRouteName() == 'subcategories.links')
            <livewire:links.subcategorieslinks :$category :$subcategory />
        @endif
    </div>
</x-master>
