@props(["block", "isFullPage" => true])
@if ($block->items->count())
    @if ($block->render_title)
        <x-tt::h2 class="mb-indent-half">{{ $block->render_title }}</x-tt::h2>
    @endif
    <div {{ $attributes->merge(["class" => "flex flex-col gap-indent lg:gap-indent-double"]) }}>
        @foreach($block->items as $index => $item)
            <div>Item {{ $index }}, id {{ $item->id }}</div>
        @endforeach
    </div>
@endif
