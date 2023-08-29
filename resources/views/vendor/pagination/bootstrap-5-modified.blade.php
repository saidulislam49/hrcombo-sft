@if ($paginator->hasPages())

    <div class="t-bg-white cards t-shadow mt-3 mb-3 py-2">
        <div class="container-fluid px-3">
            <div class="row">
                <div class="col-12">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-7">
                            <ul class="t-list d-flex">
                                {{-- Previous Page Link --}}
                                @if ($paginator->onFirstPage())
                                    <li class="t-list__item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                        <span
                                            class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text"
                                            aria-hidden="true"><i class="las la-angle-double-left"></i></span>
                                    </li>
                                @else
                                    <li class="t-list__item">
                                        <a class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text"
                                            href="{{ $paginator->previousPageUrl() }}" rel="prev"
                                            aria-label="@lang('pagination.previous')"><i class="las la-angle-double-left"></i></a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($elements as $element)
                                    {{-- "Three Dots" Separator --}}
                                    @if (is_string($element))
                                        <li class="t-list__item disabled" aria-disabled="true"><span
                                                class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text">{{ $element }}</span>
                                        </li>
                                    @endif

                                    {{-- Array Of Links --}}
                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $paginator->currentPage())
                                                <li class="t-list__item active" aria-current="page">
                                                    <span
                                                        class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text active">{{ $page }}</span>
                                                </li>
                                            @else
                                                <li class="t-list__item"><a
                                                        class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text"
                                                        href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($paginator->hasMorePages())
                                    <li class="t-list__item">
                                        <a class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text"
                                            href="{{ $paginator->nextPageUrl() }}" rel="next"
                                            aria-label="@lang('pagination.next')"><i class="las la-angle-double-right"></i></a>
                                    </li>
                                @else
                                    <li class="t-list__item disabled" aria-disabled="true"
                                        aria-label="@lang('pagination.next')">
                                        <span
                                            class="t-link t-pt-5 t-pb-5 t-pl-10 t-pr-10 paginav__link paginav__link--light border text-capitalize sm-text"
                                            aria-hidden="true"><i class="las la-angle-double-right"></i></span>
                                    </li>
                                @endif
                            </ul>
                        </div>

                        <div class="col-md-5">
                            <ul class="t-list d-flex justify-content-md-end align-items-center">
                                <li class="t-list__item nice-select--up">
                                    <select class="mx-select">
                                        <option data-display="10">10</option>
                                        <option value="1">10 - 20</option>
                                        <option value="2">20 - 30</option>
                                        <option value="3">30 - 40</option>
                                        <option value="4">40 - 50</option>
                                    </select>
                                </li>
                                <li class="t-list__item">
                                    {!! __('Showing') !!}
                                    <span
                                        class="d-inline-block text-capitalize sm-text">{{ $paginator->firstItem() }}</span>
                                    {!! __('-') !!}
                                    <span
                                        class="d-inline-block text-capitalize sm-text">{{ $paginator->lastItem() }}</span>
                                    {!! __('of') !!}
                                    <span
                                        class="d-inline-block text-capitalize sm-text">{{ $paginator->total() }}</span>

                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                            rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}"
                            rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.next')</span>
                    </li>
                @endif
            </ul>
        </div>

    </nav>
@endif
