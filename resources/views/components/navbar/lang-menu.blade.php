<li class="flex items-center order-2">
    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="lang"
        class="flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        type="button">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="flex w-7 h-7  stroke-blue stroke-2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
        </svg>
        <span class="flex mx-1 font-semibold text-gray">ENG</span>
        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div id="lang"
        class="z-10 hidden bg-white space-y-2 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 p-4">
        <span class="text-xs text-gray-500 py-2">Select Language</span>
        <ul class=" text-sm text-gray-700 dark:text-gray-200 space-y-2"
            aria-labelledby="dropdownMenuIconHorizontalButton">
            <li>
                <a href="#"
                    class="block px-4 py-2 bg-blue text-white dark:hover:bg-gray-600 dark:hover:text-white rounded-md">English</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-blue dark:hover:bg-gray-600 hover:text-white rounded-md font-gotham">አማረኛ</a>
            </li>
        </ul>
    </div>
</li>