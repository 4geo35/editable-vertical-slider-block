@props(["block", "isFullPage" => true])
@if ($block->items->count())
    @php
        $perView = config("editable-vertical-slider-block.slidesPerView");
        if (! in_array($perView, [3,6])) { $perView = 3; }
    @endphp
    @if ($block->render_title)
        <div class="flex items-center justify-between mb-indent-lg">
            <x-tt::h2 class="mr-indent">{{ $block->render_title }}</x-tt::h2>
            <div class="flex items-center justify-end space-x-indent-half" id="swiperBlockVerticalSliderNavigation-{{ $block->id }}">
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
         class="swiper min-h-[540px] overflow-hidden mb-indent">
        <div class="swiper-wrapper">
            @foreach($block->items as $index => $item)
                @if ($item->recordable->image)
                    @php($image = $item->recordable->image)
                    <div class="swiper-slide">
                        <a data-fslightbox="lightbox-vertical-slider-block-{{ $block->id }}"
                           href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}">
                            <picture>
                                <img
                                    class="rounded-base h-full object-cover object-center"
                                    src="{{ route('thumb-img', ['template' => 'vertical-slider-item', 'filename' => $image->file_name]) }}"
                                    alt="">
                            </picture>
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
