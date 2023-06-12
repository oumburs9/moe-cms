@props(['name'=>'List', 'link'=>'#'])
<li class="mt-[10px]">
    <a href="{{ $link }}"
        class=" flex items-center text-gray-500 hover:text-mblue hover:font-bold transition duration-500 ease-in-out">
        <i class="flex fi fi-rr-angle-small-right mr-1"></i>
        {{ $name }}
    </a>
</li>