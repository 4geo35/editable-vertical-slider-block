<?php

namespace GIS\EditableVerticalSliderBlock;

use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\EditableVerticalSliderBlock\Livewire\Admin\Types\SlidesWire;
use GIS\Fileable\Traits\ExpandTemplatesTrait;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class EditableVerticalSliderBlockServiceProvider extends ServiceProvider
{
    use ExpandBlocksTrait, ExpandTemplatesTrait;

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . "/config/editable-vertical-slider-block.php", 'editable-vertical-slider-block');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . "/resources/views", "evsb");
        $this->addLivewireComponents();
        $this->expandConfiguration();
    }

    protected function addLivewireComponents(): void
    {
        $component = config("editable-vertical-slider-block.customSlidesComponent");
        Livewire::component(
            "evsb-slides",
            $component ?? SlidesWire::class
        );
    }

    protected function expandConfiguration(): void
    {
        $evsb = app()->config["editable-vertical-slider-block"];
        $this->expandTemplates($evsb);
        $this->expandBlocks($evsb);
    }
}
