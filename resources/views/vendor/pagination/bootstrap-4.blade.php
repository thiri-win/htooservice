<div class="kt-pagination kt-pagination--brand kt-pagination--circle">
    @if($paginator->hasPages())
    <ul class="kt-pagination__links">
        @if($paginator->onFirstPage())
            <li class="kt-pagination__link--first" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <a href="#"><i class="fa fa-angle-double-left kt-font-brand"></i></a>
            </li>
        @else
            <li class="kt-pagination__link--next">
                <a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left kt-font-brand"></i></a>
            </li>
        @endif

        @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="kt-pagination__link--active" aria-current="page"><span class="text-white">{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
        @endforeach

        @if($paginator->hasMorePages())
            <li class="kt-pagination__link--prev">
                <a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-right kt-font-brand"></i></a>
            </li>
        @else
            <li class="kt-pagination__link--last" aria-disabled="true" aria-label="@lang('pagination.next')">
                <a href="#"><i class="fa fa-angle-double-right kt-font-brand"></i></a>
            </li>
        @endif        
    </ul>
    @endif
</div>
