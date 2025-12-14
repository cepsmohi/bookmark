<x-master>
    <div class="w-full">
        @php
            $routeName = Route::currentRouteName();
        @endphp
        @if ($routeName == 'categories')
            <livewire:links.categories/>
        @endif
        @if ($routeName == 'subcategories')
            <livewire:links.subcategories :$category/>
        @endif
        @if ($routeName == 'subcategories.links')
            <livewire:links.subcategorieslinks :$category :$subcategory/>
        @endif
        @if ($routeName == 'quicks')
            <livewire:quicks.index/>
        @endif
    </div>
</x-master>
