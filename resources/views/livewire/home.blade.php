<div>
    <div class="w-full pb-4 fcols">
        @foreach($categories as $category)
            <x-home.categories :$category/>
        @endforeach
    </div>
    <x-app.offline />
</div>
