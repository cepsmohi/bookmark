<div class="frowb gap-4 w-full pt-4">
    <div class="font-bold w-40 text-left">
        @isset($pagestyle) {{ $pagestyle }} @endisset
        ({{ ($items->currentPage() - 1) * $items->perPage() + 1 }}
        - {{ $items->currentPage() == $items->lastPage()
            ? $items->total()
            :  ($items->currentPage() - 1) * $items->perPage() + $items->perPage() }})
        / {{ $items->total() }}
    </div>
    <div class="print:hidden">{{ $items->links('components.deco.pagination') }}</div>
    <div class="font-bold w-40 text-right">Page {{ $items->currentPage() }} / {{ $items->lastPage() }}</div>
</div>
