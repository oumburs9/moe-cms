@props(['disabled' => false, 'id'=>'', 'label'=>''])
@php
$name = $attributes->whereStartsWith('wire:model')->first() ?? $attributes->whereStartsWith('name')->first() ;
$value = old($name) ?? '';
@endphp
<div class="mt-4">
    <x-label for="{{ $id }}" value="{{ $label }}" />

    <input {{ $disabled ? 'disabled' : '' }} @error($name) {!! $attributes->merge(['class' => 'border-red-300
    focus:border-red-500
    focus:ring-red-500 rounded-md shadow-sm mt-1']) !!} @enderror {!! $attributes->merge(['class' => 'border-gray-300
    focus:border-mblue
    focus:ring-mblue rounded-md shadow-sm mt-1']) !!}>

    <x-input-error for="{{ $name }}" class="mt-1.5" alert="{{ $name }}" />
</div>