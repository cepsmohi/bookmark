<div>
    <div class="frowe gap-2 p-2">
        <x-form.ahref
            id="categoryButton"
            :href="route('categories')"
            icon="asset"
            title="Categories"
            width="w-12"
            round="rounded-xl"
        />
    </div>
    <x-home.quickbuttons />
    <div class="w-full pb-4 fcols">
        @foreach($categories as $category)
            <x-home.categories :$category/>
        @endforeach
    </div>
    <x-home.footer/>
    <x-app.offline />
</div>
