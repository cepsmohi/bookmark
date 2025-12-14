<div class="fcols w-full">
    @foreach($links as $link)
        <div class="w-full h-16 frowb gap-4 cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-700 group">
            <x-link.link :$link/>
            <x-link.editbtn :$link/>
        </div>
    @endforeach
</div>
