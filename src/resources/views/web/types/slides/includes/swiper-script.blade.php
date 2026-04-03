@push("scripts")
    @php($perView = config("editable-vertical-slider-block.slidesPerView"))
    <script type="application/javascript">
        (function () {
            document.addEventListener("DOMContentLoaded", function () {
                const sliderElement = document.getElementById("swiperBlockVerticalSlider-{{ $block->id }}")
                if (sliderElement) { initBlockVerticalSliderSliders{{ $block->id }}(sliderElement); }
            })
        })()

        function initBlockVerticalSliderSliders{{ $block->id }}(sliderElement) {
            let navigationElement = document.getElementById("swiperBlockVerticalSliderNavigation-{{ $block->id }}")
            let prevBtnElement = navigationElement.querySelector(".prev-btn")
            let nextBtnElement = navigationElement.querySelector(".next-btn")

            let swiper = new Swiper(sliderElement, {
                loop: true,
                simulateTouch: true,
                spaceBetween: 24,
                slidesPerView: 1,

                @if ($perView === 3)
                    breakpoints: {
                        480: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        }
                    },
                @else
                    breakpoints: {
                        480: {
                            slidesPerView: 2,
                        },
                        768: {
                            slidesPerView: 3,
                        },
                        1024: {
                            slidesPerView: 4,
                        },
                        1280: {
                            slidesPerView: 6,
                        },
                    },
                @endif

                navigation: {
                    nextEl: nextBtnElement,
                    prevEl: prevBtnElement,
                }
            })
        }
    </script>
@endpush
