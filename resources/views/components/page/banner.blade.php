@props(['title'=>'Page Title'])
<div class="w-full bg-mwhite">
    <div class="container py-40 mx-auto">
        <div class="flex flex-col md:flex-row justify-center items-center md:justify-between">
            <h1 class="w-full text-center md:text-left text-mblue text-5xl font-black mt-20 px-4">
                {{ $title }}
            </h1>
            <div class=" bottom-0 w-full max-w-lg mx-auto z-10 flex h-4 mt-24">
                <div class="bg-myellow h-full w-3/12"></div>
                <div class="bg-mred h-full w-4/12"></div>
                <div class="bg-msky h-full w-2/12"></div>
                <div class="bg-mblue h-full w-3/12"></div>
            </div>
        </div>


        <nav class="hidden md:flex px-5 pt-3" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-mgray hover:text-mblue dark:text-gray-400 dark:hover:text-white gap-x-1">
                        <span class="fi fi-rr-home pt-0.5 text-mgray text-xs"></span>
                        Home
                    </a>
                </li>
                {{ $slot }}
            </ol>
        </nav>
    </div>
</div>