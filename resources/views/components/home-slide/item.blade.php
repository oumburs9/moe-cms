@props(['image'=>'', 'title', 'description', 'textposition'=>'left'])
{{-- text-left --}}
@if ($textposition == "left")
<div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="">
    <div class="absolute inset-0 w-full  overflow-hidden">
        <img class="object-cover w-full h-full object-center" src="{{ $image }}" alt="" srcset="">
    </div>
    <div class="absolute inset-0 md:bg-gradient-to-r md:from-dark md:via-dark/60 md:bg-dark/5 bg-dark/70 z-10">
    </div>
    <div class="container z-10">
        <div class="grid grid-cols-1 mt-10">
            <div class="md:text-left text-center">
                <h1 class="font-bold text-yellow lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">
                    {{ $title ?? "Take Care of Your Future" }}
                </h1>
                <p class="text-light text-lg max-w-xl">
                    {{ $description ?? "Launch your campaign and benefit from our
                  expertise on designing and managing conversion centered Tailwind CSS v3.x html page."}}
                </p>
                {{-- <div class="mt-8">
                    <a href=""
                        class="py-2 px-4 bg-blue hover:bg-indigo-700 border-blue hover:border-indigo-700 text-white rounded-md">Contact
                        us</a>
                </div> --}}
            </div>
        </div>
        <!--end grid-->
    </div>
    <x-section.banner />
</div>
@endif


{{-- text-center --}}
@if ($textposition == "center")
<div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="">
    <div class="absolute inset-0 w-full  overflow-hidden">
        <img class=" object-cover w-full h-full object-center" src="{{ $image }}" alt="" srcset="">
    </div>
    <div class="absolute inset-0 md:bg-gradient-to-b md:from-transparent md:to-dark md:bg-dark/20 bg-dark/70 z-10">
    </div>
    <div class="container z-10">
        <div class="grid grid-cols-1 mt-10">
            <div class="text-center">
                <h1 class="font-bold text-yellow lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">
                    {{ $title ?? "Take Care of Your Future" }}
                </h1>
                <p class="text-white/70 text-lg max-w-xl mx-auto">
                    {{ $description ?? "Launch your campaign and benefit from our
                    expertise on designing and managing conversion centered Tailwind CSS v3.x html page."}}
                </p>
            </div>
        </div>
        <!--end grid-->
    </div>
    <x-section.banner />
</div>
@endif

{{-- text-right --}}
@if ($textposition == "right")
<div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="">
    <div class="absolute inset-0 w-full  overflow-hidden">
        <img class=" object-cover w-full h-full object-center" src="{{ $image }}" alt="" srcset="">
    </div>
    <div class="absolute inset-0 md:bg-gradient-to-l md:from-dark md:via-dark/60 md:bg-dark/5 bg-dark/70 z-10">
    </div>
    <div class="container z-10">
        <div class="grid grid-cols-1 mt-10">
            <div class="md:text-right text-center">
                <h1 class="font-bold text-yellow  lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">
                    {{ $title ?? "Take Care of Your Future" }}
                </h1>
                <p class="text-white/70 text-lg max-w-xl md:ml-auto">
                    {{ $description ?? "Launch your campaign and benefit from our
                    expertise on designing and managing conversion centered Tailwind CSS v3.x html page."}}
                </p>
            </div>
        </div>
        <!--end grid-->
    </div>
    <x-section.banner />
</div>
@endif