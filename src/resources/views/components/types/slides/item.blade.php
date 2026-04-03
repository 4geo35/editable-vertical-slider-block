@props(["item"])
@if ($item->recordable->image)
    @php
        $textOnPicture = config("editable-vertical-slider-block.textOnPicture");
        $perView = config("editable-vertical-slider-block.slidesPerView");
        $block = $item->block;
        $image = $item->recordable->image;
        $imageSizeClass = $perView === 3 ?
                    "xs:h-[252px] sm:h-[300px] md:h-[390px] lg:h-[345px] xl:h-[440px] 2xl:h-[540px]" :
                    "xs:h-[315px] sm:h-[375px] md:h-[315px] xl:h-[256px] 2xl:h-[320px]";
    @endphp

    <div class="swiper-slide">
        <a data-fslightbox="lightbox-vertical-slider-block-{{ $block->id }}"
           class="inline-block relative {{ $imageSizeClass }} rounded-base overflow-hidden"
           href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}">
            @if ($perView === 3)
                <picture>
                    <source media="(min-width: 1024px)"
                            srcset="{{ route('thumb-img', ['template' => "vertical-slider-item", 'filename' => $image->file_name]) }}">
                    <source media="(min-width: 480px)"
                            srcset="{{ route('thumb-img', ['template' => "tablet-vertical-slider-item", 'filename' => $image->file_name]) }}">
                    <img
                        class="h-full object-cover object-center"
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
                        class="h-full object-cover object-center"
                        src="{{ route('thumb-img', ['template' => 'mobile-vertical-slider-half-item', 'filename' => $image->file_name]) }}"
                        alt="">
                </picture>
            @endif
            @if ($item->title && $textOnPicture)
                <div class="flex flex-col justify-end absolute w-full min-h-[150px] bottom-0 bg-linear-to-t from-black/40 to-black/0">
                    <div class="px-indent-sm pb-indent-sm pt-indent-double text-white leading-tight">{{ $item->title }}</div>
                </div>
            @endif
        </a>
        @if ($item->title && !$textOnPicture)
            <div class="mt-indent-sm">{{ $item->title }}</div>
        @endif
    </div>
@endif
