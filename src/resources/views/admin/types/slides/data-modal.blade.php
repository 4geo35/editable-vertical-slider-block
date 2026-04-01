<x-tt::modal.aside wire:model="displayData">
    <x-slot name="title">{{ $itemId ? "Редактировать" : "Добавить" }} элемент</x-slot>
    <x-slot name="content">
        <form wire:submit.prevent="{{ $itemId ? 'update' : 'store' }}" class="space-y-indent-half"
              id="verticalSliderBlockDataForm-{{ $block->id }}">

            <div>
                <label for="verticalSliderImage-{{ $block->id }}" class="inline-block mb-2">Изображение</label>
                <input type="file" id="verticalSliderImage-{{ $block->id }}"
                       class="form-control {{ $errors->has('image') ? 'border-danger' : '' }}"
                       wire:loading.attr="disabled"
                       wire:model.lazy="image">
                <x-tt::form.error name="image"/>
            </div>

            <div>
                <label for="verticalSliderTitle-{{ $block->id }}" class="inline-block mb-2">
                    Подпись изображения
                </label>
                <input type="text" id="verticalSliderTitle-{{ $block->id }}"
                       class="form-control {{ $errors->has("title") ? "border-danger" : "" }}"
                       wire:loading.attr="disabled"
                       wire:model="title">
                <x-tt::form.error name="title"/>
            </div>

            <div class="flex items-center space-x-indent-half">
                <button type="button" class="btn btn-outline-dark" wire:click="closeData">
                    Отмена
                </button>
                <button type="submit" form="verticalSliderBlockDataForm-{{ $block->id }}" class="btn btn-primary"
                        wire:loading.attr="disabled">
                    {{ $itemId ? "Обновить" : "Добавить" }}
                </button>
            </div>
        </form>
    </x-slot>
</x-tt::modal.aside>
