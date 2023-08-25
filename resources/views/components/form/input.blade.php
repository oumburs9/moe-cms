@props([
'label' => null,
'id' => null,
'name' => null,
'type' => 'text',
'placeholder' => null
])

@php $wireModel = $attributes->get('wire:model'); @endphp

<div>
    @if($label)
    <label for="{{ $id ?? '' }}" class="block text-sm font-semibold leading-5 text-gray-700">
        {{ $label  }}
    </label>
    @endif

    <div data-model="{{ $wireModel }}" class="mt-1 rounded-md shadow-sm">
        <input {{ $attributes->whereStartsWith('wire:model') }} id="{{ $id ?? '' }}" name="{{ $name ?? '' }}" type="{{
        $type ?? '' }}" required class="appearance-none flex w-full h-10 px-3 py-2 text-sm bg-white border
        border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mblue focus:border-mblue p-2.5
       
        disabled:opacity-50
        @error($wireModel) border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red
        @enderror" placeholder="{{ $placeholder ?? '' }}" />
    </div>

    @error($wireModel)
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>