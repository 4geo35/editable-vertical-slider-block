@props(["block", "isFullPage" => true])
@if ($block->items->count())
    @php
        $perView = config("editable-vertical-slider-block.slidesPerView");
        if (! in_array($perView, [3,6])) { $perView = 3; }
    @endphp
    @if ($block->render_title)
        <div class="flex items-center justify-between mb-indent-lg">
            <x-tt::h2 class="sm:mr-indent">{{ $block->render_title }}</x-tt::h2>
            <div class="hidden sm:flex items-center justify-end space-x-indent-half" id="swiperBlockVerticalSliderNavigation-{{ $block->id }}">
                <button type="button" class="prev-btn btn btn-primary px-btn-x-ico rotate-180">
                    <x-tt::ico.arrow-right />
                </button>
                <button type="button" class="next-btn btn btn-primary px-btn-x-ico">
                    <x-tt::ico.arrow-right />
                </button>
            </div>
        </div>
    @endif
    <div id="swiperBlockVerticalSlider-{{ $block->id }}"
         class="swiper overflow-hidden mb-indent">
        <div class="swiper-wrapper">
            @foreach($block->items as $index => $item)
                @if ($item->recordable->image)
                    @php
                        $image = $item->recordable->image;
                        $imageSizeClass = $perView === 3 ?
                            "xs:h-[252px] sm:h-[300px] md:h-[390px] lg:h-[345px] xl:h-[440px] 2xl:h-[540px]" :
                            "xs:h-[315px] sm:h-[375px] md:h-[315px] xl:h-[256px] 2xl:h-[320px]";
                    @endphp
                    <div class="swiper-slide">
                        <a data-fslightbox="lightbox-vertical-slider-block-{{ $block->id }}"
                           class="inline-block {{ $imageSizeClass }}"
                           href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}">
                            @if ($perView === 3)
                                <picture>
                                    <source media="(min-width: 1024px)"
                                            srcset="{{ route('thumb-img', ['template' => "vertical-slider-item", 'filename' => $image->file_name]) }}">
                                    <source media="(min-width: 480px)"
                                            srcset="{{ route('thumb-img', ['template' => "tablet-vertical-slider-item", 'filename' => $image->file_name]) }}">
                                    <img
                                        class="rounded-base h-full object-cover object-center"
                                        src="{{ route('thumb-img', ['template' => 'mobile-vertical-slider-item', 'filename' => $image->file_name]) }}"
                                        alt="">
                                </picture>
                            @else
                                <picture>
                                    <source media="(min-width: 768px)"
                                            srcset="{{ route('thumb-img', ['template' => "vertical-slider-half-item", 'filename' => $image->file_name]) }}">
                                    <source media="(min-width: 480px)"
                                            srcset="{{ route('thumb-img', ['template' => "tablet-vertical-slider-half-item", 'filename' => $image->file_name]) }}">
                                    <img
                                        class="rounded-base h-full object-cover object-center"
                                        src="{{ route('thumb-img', ['template' => 'mobile-vertical-slider-half-item', 'filename' => $image->file_name]) }}"
                                        alt="">
                                </picture>
                            @endif
                        </a>
                        @if ($item->title)
                            <div class="mt-indent-sm">{{ $item->title }}</div>
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    @include("evsb::web.types.slides.includes.swiper-script")
@endif
