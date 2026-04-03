@props(["block", "isFullPage" => true])
@if ($block->items->count())
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
                <x-evsb::types.slides.item :$item />
            @endforeach
        </div>
    </div>
    @include("evsb::web.types.slides.includes.swiper-script")
@endif
