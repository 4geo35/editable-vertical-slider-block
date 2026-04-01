<?php

namespace GIS\EditableVerticalSliderBlock\Livewire\Admin\Types;

use GIS\EditableBlocks\Traits\CheckBlockAuthTrait;
use GIS\EditableBlocks\Traits\EditBlockTrait;
use GIS\EditableBlocks\Traits\PlaceholderBlockTrait;
use GIS\EditableBlocks\Traits\SimpleItemActionsTrait;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class SlidesWire extends Component
{
    use WithFileUploads, EditBlockTrait, SimpleItemActionsTrait, CheckBlockAuthTrait, PlaceholderBlockTrait;

    public function rules(): array
    {
        $requiredImage = $this->itemId ? "nullable" : "required";
        return [
            "title" => ["nullable", "string", "max:250"],
            "image" => [$requiredImage, "image"],
        ];
    }

    public function validationAttributes(): array
    {
        return [
            "title" => "Заголовок",
            "image" => "Изображение",
        ];
    }

    public function render(): View
    {
        $items = $this->block->items()->with("recordable")->orderBy("priority")->get();
        return view("evsb::livewire.admin.types.slides-wire", compact("items"));
    }
}
