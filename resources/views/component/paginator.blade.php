@if ($paginator->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination m-auto">
        <ul class="pagination flex gap-1">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="cursor-pointer disabled">
                    <span class="border-[1px] rounded-lg py-1 px-3"><i class="fa fa-angle-left"></i></span>
                </li>
            @else
                <li class="cursor-pointer">
                    <a class="border-[1px] rounded-lg py-1 px-3 w-full h-full" href="{{ $paginator->previousPageUrl() }}">
                        <span><i class="fa fa-angle-left"></i></span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="cursor-pointer active"><span class="border-[1px] rounded-lg py-1 px-3">{{ $page }}</span></li>
                        @elseif (($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) || $page == $paginator->lastPage())
                            <li class="cursor-pointer"><a class="border-[1px] rounded-lg py-1 px-3 w-full h-full" href="{{ $url }}">{{ $page }}</a></li>
                        @elseif ($page == $paginator->lastPage() - 1)
                            <li class="cursor-pointer disabled"><span class="border-[1px] rounded-lg py-1 px-3"><i class="fa fa-ellipsis-h"></i></span></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="cursor-pointer">
                    <a class="border-[1px] rounded-lg py-1 px-3 w-full h-full" href="{{ $paginator->nextPageUrl() }}">
                        <span><i class="fa fa-angle-right"></i></span>
                    </a>
                </li>
            @else
                <li class="cursor-pointer disabled">
                    <span class="border-[1px] rounded-lg py-1 px-3"><i class="fa fa-angle-right"></i></span>
                </li>
            @endif
        </ul>
    </div>
    <!-- Pagination -->
@endif