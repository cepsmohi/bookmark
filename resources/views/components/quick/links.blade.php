<div class="fcols w-full">
    @foreach($quicks as $quick)
        @php
            $link = $quick->link;
        @endphp
        <div class="w-full frowb gap-4 cursor-pointer hover:bg-gray-200 group">
            <x-quick.link :$quick :$link/>
            <x-quick.editbtn :$quick/>
        </div>
    @endforeach
</div>
