<div class="w-full pt-4">
    @if ($paginator->hasPages())
        <nav
            class="frow gap-2"
            role="navigation"
            aria-label="Pagination Navigation"
        >
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                @else
                    @if (method_exists($paginator, 'getCursorName'))
                        <button
                            class="rounded-xl bg-theme-light hover:bg-theme-first"
                            type="button"
                            dusk="previousPage"
                            wire:click="setPage('{{ $paginator->previousCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                            wire:loading.attr="disabled"
                        >
                            <x-deco.icon
                                icon="previous"
                                width="w-12"
                            />
                        </button>
                    @else
                        <button
                            class="rounded-xl bg-theme-light hover:bg-theme-first"
                            type="button"
                            wire:click="previousPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled"
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                        >
                            <x-deco.icon
                                icon="previous"
                                width="w-12"
                            />
                        </button>
                    @endif
                @endif
            </span>

            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    @if (method_exists($paginator, 'getCursorName'))
                        <button
                            class="rounded-xl bg-theme-light hover:bg-theme-first"
                            type="button"
                            dusk="nextPage"
                            wire:click="setPage('{{ $paginator->nextCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                            wire:loading.attr="disabled"
                        >
                            <x-deco.icon
                                icon="next"
                                width="w-12"
                            />
                        </button>
                    @else
                        <button
                            class="rounded-xl bg-theme-light hover:bg-theme-first"
                            type="button"
                            wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled"
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                        >
                            <x-deco.icon
                                icon="next"
                                width="w-12"
                            />
                        </button>
                    @endif
                @else
                @endif
            </span>
        </nav>
    @endif
</div>
