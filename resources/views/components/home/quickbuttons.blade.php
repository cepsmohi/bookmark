<div class="frows flex-wrap gap-4">
    @php
        use App\Models\QuickButton;
        $quick_buttons = QuickButton::orderBy('position')->get();
    @endphp
    @foreach($quick_buttons as $quick)
        @php
            $link = $quick->link;
        @endphp
        <x-home.link :$link/>
    @endforeach
</div>
