<div>
    <div>
        <a href="{{ route('thumb-img', ['template' => 'original', 'filename' => $item->recordable->image->file_name]) }}"
           target="_blank" class="">
            Изображение
        </a>
    </div>
    <div>{{ $item->title }}</div>
</div>
