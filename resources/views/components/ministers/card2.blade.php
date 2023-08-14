@props( [ 'name' => '', 'position' => '', 'department' => '', 'photo' =>'' ] )
@php
$colors = ['#3c8fc3', '#2048a1', '#d1503e', '#f8be13'];
$bcolor = $colors[array_rand($colors)] ;

@endphp
<div class="flex items-center">
    @if ($photo == '')
    <div class="mr-4 border-l-8 rounded-full shadow" style=" border-color: {{ $bcolor }};">
        <x-logo h="160px " class="object-cover mr-auto "></x-logo>
    </div>

    @else
    <img src=" {{ $photo }}" class="object-cover w-40 h-40 mr-4 border-l-8 rounded-full shadow "
        style=" border-color: {{ $bcolor }};">
    @endif

    <div class="relative">
        <p class="text-xs font-semibold text-mblue">{{ $department }}</p>
        <p class="text-lg font-bold text-gray-800">{{ $name ?? 'Carly Jenson' }}</p>
        <p class="text-sm text-gray-600">{{ $position ?? 'Designer' }}</p>
    </div>
</div>