@aware(['deskname', 'direction' => 'left', 'color'=>'sky'])
@php
$faker = \Faker\Factory::create();
@endphp
@if ( $direction == 'left')
<div class="h-full relative border-l-4 border-{{ $color }} bg-[#fff] shadow rounded ml-4 p-1 text-xs">
    <p class=""> {{ $deskname ?? $faker->sentence($nbWords = 4, $variableNbWords = true) }}</p>
    <i class="inset-y-1/2 flex absolute -left-4 fi fi-rr-horizontal-rule text-yellow"></i>
</div>
@else
<div class="h-full relative border-r-4 border-{{ $color }} bg-[#fff] shadow rounded mr-4 p-1 text-xs">
    <p class=""> {{ $deskname ??$faker->sentence($nbWords = 4, $variableNbWords = true) }}</p>
    <i class="inset-y-1/2 flex absolute -right-4 fi fi-rr-horizontal-rule text-yellow"></i>
</div>
@endif