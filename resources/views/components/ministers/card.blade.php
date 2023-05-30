@props(['name', 'title'=>'MINISTER', 'image', 'sector'=>'Ministry of Education'])

<div class="rounded flex flex-col mx-auto">
    <div class="rounded-xl overflow-hidden w-96 relative drop-shadow-xl">
        <img src="{{ $image }}" alt="" srcset="" class="object-center object-cover h-[30rem] w-96">
    </div>
    <div class="px-2">
        <p class="text-left text-xs font-bold text-blue uppercase mt-4 tracking-wider">
            {{ $title }}
        </p>
        <p class="text-left text-xl font-bold ">
            {{ $name ?? 'H.E Pro. Birhanu Nega'}}
        </p>
        <p class="text-left text-gray/90 text-xs tracking-wider">
            {{ $sector }}
        </p>
    </div>
</div>