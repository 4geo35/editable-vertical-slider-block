<?php

namespace GIS\EditableVerticalSliderBlock\Templates;

use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\ModifierInterface;

class VerticalSliderHalfItem implements ModifierInterface
{
    public function apply(ImageInterface $image): ImageInterface
    {
        return $image->cover(220, 320);
    }
}
