<?php

return [
    "availableTypes" => [
        "verticalSlides" => [
            "title" => env("EDITABLE_VERTICAL_SLIDER_TITLE", "Слайдер"),
            "admin" => "evsb-slides",
            "render" => "evsb::types.slides",
        ],
    ],

    "slidesPerView" => 3, // 3 or 6
    "textOnPicture" => false,

    // Components
    "customSlidesComponent" => null,
    // Templates
    "templates" => [
        "vertical-slider-item" => \GIS\EditableVerticalSliderBlock\Templates\VerticalSliderItem::class,
        "tablet-vertical-slider-item" => \GIS\EditableVerticalSliderBlock\Templates\TabletVerticalSliderItem::class,
        "mobile-vertical-slider-item" => \GIS\EditableVerticalSliderBlock\Templates\MobileVerticalSliderItem::class,

        "vertical-slider-half-item" => \GIS\EditableVerticalSliderBlock\Templates\VerticalSliderHalfItem::class,
        "tablet-vertical-slider-half-item" => \GIS\EditableVerticalSliderBlock\Templates\TabletVerticalSliderHalfItem::class,
        "mobile-vertical-slider-half-item" => \GIS\EditableVerticalSliderBlock\Templates\MobileVerticalSliderHalfItem::class,
    ],
];
