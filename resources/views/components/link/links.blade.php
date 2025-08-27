<div class="fcols flex-wrap gap-1 w-full">
    @foreach($links as $link)
        <div class="w-full frowb gap-4 cursor-pointer hover:bg-gray-200 group">
            <x-link.link :$link/>
            <x-link.editbtn :$link/>
        </div>
    @endforeach
</div>
