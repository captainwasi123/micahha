@if ($paginator->hasPages())
    <div class="breadcrumbs-custom">
       <ul class="alegraya">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li> <a href="javascript:void(0)" class="disabled"> <i class="fa fa-angle-left"> </i> </a> </li>
            @else
                <li> <a href="{{ $paginator->previousPageUrl() }}" class=""> <i class="fa fa-angle-left"> </i> </a> </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li> <a href="javascript:void(0)" class="active"> {{ $page }} </a> </li>
                        @else
                            <li> <a href="{{ $url }}"> {{ $page }} </a> </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li> <a href="{{ $paginator->nextPageUrl() }}"> <i class="fa fa-angle-right"> </i> </a> </li>
            @else
                <li> <a href="javascript:void(0)" class="disabled"> <i class="fa fa-angle-right"> </i> </a> </li>
            @endif
        </ul>
    </div>
@endif
