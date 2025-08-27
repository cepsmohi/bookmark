@php
    use App\Models\Category;
    use App\Models\Link;
    use App\Models\Subcategory;
@endphp
<div class="frows gap-2 uppercase">
    <x-deco.icon icon="asset"/>
    <div>{{ Category::get()->count() }}</div>
    <x-deco.icon icon="hline" width="w-7 dark:bg-transparent"/>
    <x-deco.icon icon="itemwise"/>
    <div>{{ Subcategory::get()->count() }}</div>
    <x-deco.icon icon="hline" width="w-7 dark:bg-transparent"/>
    <x-deco.icon icon="link"/>
    <div>{{ Link::get()->count() }}</div>
</div>
