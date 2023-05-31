@php
$faker = \Faker\Factory::create();
@endphp
@props(['name'=>'', 'color'=>'sky'])
<div class="flex items-center justify-center">
    <div class="w-full p-2">
        <div class=" relative bg-{{ $color }} text-[#fff] tracking-wide rounded p-3 mb-5 text-center text-lg font-bold">
            {{ $name }}
            <div class="absolute inset-x-1/2 h-1/2 bg-yellow w-0.5 top-full"></div>
        </div>
        <div class="my-6  h-0.5 bg-yellow mx-auto w-[77%]"></div>
        <div class="grid grid-cols-4 gap-4">
            {{ $slot }}
        </div>
    </div>
</div>