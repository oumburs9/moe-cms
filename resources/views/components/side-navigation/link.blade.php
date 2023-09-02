@props(['active', 'name', 'icon'=>'', 'submenu'=>false])
@php
$classes = ($active ?? false)
? 'hover:bg-mblue/90 bg-mblue text-white group flex items-center px-2 py-1 text-lg font-semibold rounded-md
cursor-pointer transition duration-150 ease-in-out'
: 'text-gray-600 hover:bg-mblue hover:text-white group flex items-center px-2 py-1 text-lg font-semibold rounded-md
dark:text-mlight/90 cursor-pointer transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >
    <div class="flex items-center mx-1 gap-x-2">
        <i class="fi fi-rr-{{ $icon }} flex"></i>
        <h4 class="flex line-clamp-1 "> {{ $name ?? $slot }}</h4>
    </div>
    @if ($submenu)
    <i :class="{'text-gray-600': ! open, 'rotate-180 ': open }"
        class="flex flex-shrink-0 ml-auto transition duration-200 ease-in-out transform fi fi-rr-angle-small-down group-hover:text-white">
    </i>
    @endif

</a>