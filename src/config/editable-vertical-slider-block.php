<?php

return [
    "availableTypes" => [
        "verticalSlides" => [
            "title" => env("EDITABLE_VERTICAL_SLIDER_TITLE", "Слайдер"),
            "admin" => "evsb-slides",
            "render" => "evsb::types.slides",
        ],
    ],

    "slidesPerView" => 3,

    // Components
    "customSlidesComponent" => null,
    // Templates
    "templates" => [
        "vertical-slider-item" => \GIS\EditableVerticalSliderBlock\Templates\VerticalSliderItem::class,
    ],
];
