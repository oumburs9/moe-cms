@props(['name', 'icon'=>'down', 'active'=>false, 'id'=>'Dropdown', 'placement' => 'bottom'])
<li>
    <button id="{{ $id }}Link" data-dropdown-toggle="{{ $id }}" data-dropdown-trigger="hover" data-dropdown-delay="100"
        class="flex items-center justify-between w-full px-4 py-2 text-gray-500 hover:bg-mblue hover:text-white hover:font-bold md:hover:bg-transparent md:border-0 md:hover:text-mblue md:p-0 md:w-auto md:dark:hover:text-mblue-500 md:dark:hover:bg-transparent rounded-md"
        data-dropdown-placement="{{ $placement }}">
        @if ($active)
        <span class="font-bold text-mblue">{{ $name ?? "Dropdown" }}</span>
        @else
        <span class="">{{ $name ?? "Dropdown" }}</span>
        @endif

        @if ($icon == 'down')
        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
        @endif
        @if ($icon == 'right')
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
        </svg>
        @endif
    </button>

    <!-- Dropdown menu -->
    <div id="{{ $id }}"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52">
        <ul class="p-4 text-sm gap-y-4 flex flex-col" aria-labelledby="dropdownLargeButton">
            {{ $slot }}
        </ul>
    </div>
</li>