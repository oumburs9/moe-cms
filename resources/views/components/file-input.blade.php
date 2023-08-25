@props(['id' =>'image_label', 'value', 'forms', 'lang'=>''])
<div>
    <div class="flex items-center mt-2 rounded-lg">
        <div class="flex">
            <button type="button"
                class="flex flex-shrink-0 px-4 py-2 text-sm font-semibold border-0 rounded-lg cursor-pointer text-blue w-28 bg-blue/10 hover:bg-blue hover:text-white focus:border-none"
                id="button-{{ $id }}">
                Choose File
            </button>
        </div>

        {{-- <img saria-label="Image" aria-describedby="button-{{ $id }}" id="image_label" src="" alt="" srcset=""> --}}
        @if ($value !="")
        <input type="text" {{ $attributes->merge([ 'class' => 'flex flex-shrink bg-transparent px-7 rounded-r-lg
        border-none disabled:opacity-70 placeholder:text-sm
        placeholder:text-blue text-blue focus:border:none h-8 ring-0 focus:ring-0 text-clip w-full
        ']) }}
        id="{{ $id }}" aria-label="Image" aria-describedby="button-image"
        placeholder="No file Chosen" disabled />
        @else
        <input type="text" {{ $attributes->merge([ 'class' => 'flex flex-shrink bg-transparent px-7 rounded-r-lg
        border-none disabled:opacity-70 placeholder:text-sm
        placeholder:text-blue text-blue focus:border:none h-8 ring-0 focus:ring-0 text-clip w-full
        ']) }}
        id="{{ $id }}" aria-label="Image" aria-describedby="button-image"
        placeholder="No file Chosen" disabled />
        @endif
    </div>
</div>
