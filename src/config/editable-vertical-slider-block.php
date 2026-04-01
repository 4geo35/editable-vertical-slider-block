<?php

return [
    "availableTypes" => [
        "verticalSlides" => [
            "title" => env("EDITABLE_VERTICAL_SLIDER_TITLE", "Слайдер"),
            "admin" => "evsb-slides",
            "render" => "evsb::types.slides",
        ],
    ],
    // Components
    "customSlidesComponent" => null,
    // Templates
    "templates" => [],
];
