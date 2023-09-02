@props(['activeLink', 'name'=>'', 'icon'=>''])
<div x-data="{ open: {{$activeLink ? 'true' : 'false' }} }" @close.stop="open = true" class="space-y-1 cursor-pointer">
    <x-side-navigation.link :active="$activeLink" @click="open = ! open" aria-controls="sub-menu-1"
        aria-expanded="false" name="{{ $name }}" icon="{{ $icon }}" submenu>
    </x-side-navigation.link>

    <div class="relative overflow-clip ">
        <div id="" x-show=" open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-full"
            x-transition:enter-end="opacity-100 translate-y-0 h-auto"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start=" opacity-100 scale-100"
            x-transition:leave-end="-translate-y-full opacity-0"
            class="px-1 pb-2 space-y-1 border-b bg-gradient-to-t from-white via-white rounded-b-xl"
            style="display: none">
            {{ $slot }}
        </div>
    </div>

</div>