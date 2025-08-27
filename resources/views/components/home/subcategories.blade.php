<div
    @class([
    'fcols md:frows gap-2 w-full'
    ])
>
    <div class="w-full md:w-48 text-gray-300 font-bold whitespace-nowrap uppercase truncate">
        {{ $subCategory->title }}
    </div>
    <div class="fcols md:frows flex-wrap gap-4 w-full">
        @foreach($subCategory->links as $link)
            <x-home.link :$link/>
        @endforeach
    </div>
</div>
