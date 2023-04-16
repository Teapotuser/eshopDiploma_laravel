@if ($paginator->hasPages())
    <div class="row">
        <div class="col-xs-5">
            <div class="pagination">
                <ul>
                    @if ($paginator->onFirstPage())
                        <li><a href="#"><</a></li>
                    @else
                        <li><a href="{{ $paginator->previousPageUrl() }}"><</a></li>
                    @endif
                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                        @endif
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li><a class="active" href="#">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    @if ($paginator->hasMorePages())
                        <li><a href="{{ $paginator->nextPageUrl() }}">></a></li>
                        <li><a href="{{ $paginator->url($paginator->lastPage()) }}">>|</a></li>
                    @else
                        <li><a href="#">></a></li>
                        <li><a href="#">>|</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-xs-7">
            <div class="product-result">
                <span>Showing
                    @if ($paginator->firstItem())
                        {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }}
                    @else
                        {{ $paginator->count() }}
                    @endif
                    of {{ $paginator->total() }}
                    ({{ ceil($paginator->total() / $paginator->count()) }})</span>
            </div>
        </div>
    </div>
@endif