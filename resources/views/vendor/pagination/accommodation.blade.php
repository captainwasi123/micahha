@if ($paginator->hasPages())
    <ul class="alegraya">
        {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li> 
                    <span> <i class="fa fa-angle-left"> </i> </span> 
                </li>
            @else
                <li> 
                    <a href="{{ $paginator->previousPageUrl() }}"> <i class="fa fa-angle-left"> </i> </a> 
                </li>
            @endif

        {{-- Pagination Elements --}}

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li> <span> {{ $element }} </span> </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                      <li> <span> {{ $page }} </span> </li>
                    @else
                        <li> <a href="{{ $url }}"> {{ $page }} </a> </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li> 
                    <a href="{{ $paginator->nextPageUrl() }}"> <i class="fa fa-angle-right"> </i> </a> 
                </li>
            @else
                <li> 
                    <span><i class="fa fa-angle-right"> </i></span>
                </li>
            @endif
@endif