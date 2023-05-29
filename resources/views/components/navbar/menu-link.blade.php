@props(['name', 'link'=>'#', 'active'=>false])

@if ($active)
<li>
    <a href="{{ $link }}"
        class="block py-2 pl-3 pr-4 text-white bg-blue rounded-md md:bg-transparent md:text-blue md:p-0 md:dark:text-blue font-bold"
        aria-current="page">
        {{ $name }}
    </a>
    @else
<li>
    <a href="{{ $link }}"
        class="block py-2 pl-3 pr-4 text-gray-500 hover:text-white  hover:font-semibold rounded-md hover:bg-blue md:hover:bg-transparent md:hover:text-blue md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
        {{ $name }}
    </a>
</li>
@endif