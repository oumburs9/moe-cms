@php
$faker = \Faker\Factory::create();
@endphp

@props(['name', 'direction'=>'left' ,'color'=>'msky'])
@if ($direction == 'left')
<div class="relative w-full cursor-pointer hover:-translate-y-1 transition-transform">
    <span class="bg-myellow mt-1 h-full w-0.5 left-0.5  -z-10 absolute inset-y-0"></span>
    <span class="bg-myellow h-6 w-0.5 absolute z-10 bottom-full inset-x-1/2"></span>
    <div
        class="h-auto font-semibold rounded p-2 mb-4 border-b-4 shadow-lg drop-shadow bg-[#fff] border-{{ $color }} text-mgray text-xs overflow-hidden">
        <p class=""> {{ $name ?? $faker->sentence($nbWords =6, $variableNbWords = false) }}</p>
    </div>
    <div class="grid grid-rows gap-y-2">
        {{ $slot }}
    </div>
</div>
@else
<div class="relative w-full cursor-pointer hover:-translate-y-1 transition-transform">
    <span class="bg-myellow mt-1 h-full w-0.5 right-0.5  -z-10 absolute inset-y-0"></span>
    <span class="bg-myellow h-6 w-0.5 absolute z-10 bottom-full inset-x-1/2"></span>
    <div
        class="h-auto font-semibold rounded p-2 mb-4 border-b-4 shadow-lg drop-shadow bg-[#fff] border-{{ $color }} text-mgray text-xs overflow-hidden">
        <p class=""> {{ $name ?? $faker->sentence($nbWords =6, $variableNbWords = false) }}</p>
    </div>
    <div class="grid grid-rows gap-y-2">
        {{ $slot }}
    </div>
</div>
@endif