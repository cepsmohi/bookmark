<div>
    <div class="frowe gap-2 p-2">
        <x-form.ahref
            id="categoryButton"
            :href="route('categories')"
            icon="asset"
            title="Categories"
            width="w-12"
            color="purple"
            round="rounded-xl"
        />
    </div>
    <x-home.quickbuttons />
    <div class="w-full pb-4 fcols">
        @php
            $countcategories = $categories->count();
            $countsubcategories = 0;
            $countlinks = 0;
        @endphp
        @foreach($categories as $category)
            <div class="fcols flex-wrap mb-4 w-full">
                <div class="text-xl mt-4 font-black whitespace-nowrap uppercase">{{ $category->title }}</div>
                <div class="fcols w-full">
                    @php
                        $countsubcategories += $category->subcategories->count();
                    @endphp
                    @foreach($category->subcategories as $subCategory)
                        <div class="frows flex-wrap gap-1 border-b w-full">
                            <div class="font-bold whitespace-nowrap uppercase">{{ $subCategory->title }}</div>
                            <x-deco.icon icon="hline"/>
                            @php
                                $countlinks += $subCategory->links->count();
                            @endphp
                            @foreach($subCategory->links as $link)
                                <a
                                    class="whitespace-nowrap alink uppercase frows gap-2"
                                    href="{!! $link->href !!}" target="_blank"
                                >
                                    <img
                                        class="rounded-full shadow"
                                        width="20"
                                        height="20"
                                        src="{{ asset('images/public/links/'.$link->id.'.jpg') }}"
                                        onerror="this.src='images/public/links/link.svg'"
                                        alt=""
                                    />
                                    <span class="text-xs">{{ $link->title }}</span>
                                </a>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <div class="frows gap-1 uppercase">
        <x-deco.icon icon="asset" />
        {{ $countcategories }}
        <x-deco.icon icon="hline" />
        <x-deco.icon icon="itemwise" />
        {{ $countsubcategories }}
        <x-deco.icon icon="hline" />
        <x-deco.icon icon="link" />
        {{ $countlinks }}
    </div>
    <x-app.offline />
</div>
