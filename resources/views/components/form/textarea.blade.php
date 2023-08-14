@props([
'label' => null,
'id' => null,
])

@php $wireModel = $attributes->get('wire:model'); @endphp

<div>
    @if($label)
    <label for="{{ $id ?? '' }}" class="block text-sm font-semibold leading-5 text-gray-700">
        {{ $label  }}
    </label>
    @endif

    <div data-model="{{ $wireModel }}" class="mt-1 rounded-md shadow-sm">
        <textarea {{ $attributes->merge(['class' => 'block p-2.5 w-full text-sm text-gray-700 rounded-lg border border-gray-300 focus:ring-mblue focus:border-mblue dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mblue dark:focus:border-mblue']) }}
        @error($wireModel) class="text-red-900 placeholder-red-300 border-red-300 focus:border-red-300 focus:ring-red"
        @enderror> </textarea>
    </div>

    @error($wireModel)
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>