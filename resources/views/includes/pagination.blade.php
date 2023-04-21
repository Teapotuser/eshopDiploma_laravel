@if ($paginator->hasPages())
    <div class="pagination-wrapper">
        <div class="pagination">
            @if ($paginator->onFirstPage())
                <a href="#" class="pagination-button-arrow disabled">|<</a>
                <a href="#" class="pagination-button-arrow disabled"><</a>
            @else
                <a href="{{ $paginator->url(1) }}" class="pagination-button-arrow">|<</a>
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination-button-arrow"><</a>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="page-link" class="page-item disabled" aria-disabled="true">{{ $element }}</span>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="active pagination-button-page" href="#" >{{ $page }}</a>
                        @else
                            <a href="{{ $url }}" class="pagination-button-page">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination-button-arrow">></a>
                <a href="{{ $paginator->url($paginator->lastPage()) }}" class="pagination-button-arrow">>|</a>
            @else
                <a href="#" class="pagination-button-arrow disabled">></a>
                <a href="#" class="pagination-button-arrow disabled">>|</a>
            @endif            
        </div>
        <div class="pagination-text-counters">
            <div class="product-result">                
                    <span> Страница 
                    {{ $paginator->currentPage() }}
                    из {{ ceil($paginator->total() / $paginator->perPage() ) }}</span>
                    <span>  |  Товары
                    @if ($paginator->firstItem())
                        {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }}
                    @else
                        {{ $paginator->count() }}
                    @endif
                    из {{ $paginator->total() }}
                    <!-- ({{ ceil($paginator->total() / $paginator->perPage() ) }}) --></span>
            </div>
        </div>
    <!-- </div> -->
@endif