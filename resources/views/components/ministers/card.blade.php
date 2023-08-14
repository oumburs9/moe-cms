@props(['name', 'title'=>'MINISTER', 'image', 'sector'=>'Ministry of Education'])

<div class="flex">
    <div class="relative flex items-center overflow-hidden bg-mblue/30 md:h-96 group rounded-3xl">
        <img src="{{ $image }}" alt="" srcset=""
            class="object-cover w-full h-full transition duration-500 motion-safe:group-hover:scale-105">
        <div class="absolute inset-0 flex flex-col justify-end bg-gradient-to-t from-black to-black/0 to-40% p-4">
            <p class="mt-4 text-xs font-bold tracking-wider text-left uppercase text-msky">
                {{ $title }}
            </p>
            <p class="text-lg font-bold text-left text-white line-clamp-1">
                {{ $name ?? 'H.E Pro. Birhanu Nega'}}
            </p>
            <p class="text-xs tracking-wider text-left text-mlight">
                {{ $sector }}
            </p>
        </div>
    </div>
</div>