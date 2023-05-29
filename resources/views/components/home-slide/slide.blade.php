@props(['buttons'=>false, 'type'=>'slide'])
<section id="controls-carousel" class="relative" data-carousel="{{ $type }}">
    <div class="overflow-hidden relative h-screen inset-0">
        {{ $slot }}
        @if ($buttons)
        <x-home-slide.buttons />
        @endif
    </div>
</section>