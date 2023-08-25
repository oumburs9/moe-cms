@props(['title'=>'Page Title'])
<div class="w-full bg-mwhite relative sm:h-72 lg:h-96 bg-no-repeat bg-cover bg-center">
    <div class="container py-20  md:pt-16 lg:py-32 mx-auto">
        <div class="flex flex-col md:flex-row justify-center items-center md:justify-between mt-20 px-5">
            <h1 class="w-full text-left text-mblue text-2xl md:text-3xl lg:text-5xl font-black ">
                {{ $title }}
            </h1>
            <div class="absolute md:static bottom-0 w-full md:max-w-lg mx-auto z-10 flex h-3 md:h-4">
                <div class="bg-myellow h-full w-3/12"></div>
                <div class="bg-mred h-full w-4/12"></div>
                <div class="bg-msky h-full w-2/12"></div>
                <div class="bg-mblue h-full w-3/12"></div>
            </div>
        </div>

        <nav class="flex px-6 lg:pt-3" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 text-[11px] sm:text-xs md:text-base font-medium">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-gray-600 hover:text-mblue gap-x-1">
                        <span class="fi fi-rr-home pt-0.5 "></span>
                        Home
                    </a>
                </li>
                {{ $slot }}
            </ol>
        </nav>
    </div>
</div>