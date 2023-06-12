@props(['name', 'title'=>'MINISTER', 'image', 'sector'=>'Ministry of Education'])

<div class="rounded flex flex-col mx-auto">
    <div class="rounded-xl overflow-hidden w-96 relative shadow-xl shadow-mblue/30">
        <img src="{{ $image }}" alt="" srcset="" class="object-center object-cover h-[30rem] w-96">
    </div>
    <div class="px-2">
        <p class="text-left text-xs font-bold text-mblue uppercase mt-4 tracking-wider">
            {{ $title }}
        </p>
        <p class="text-left text-xl font-bold text-dark">
            {{ $name ?? 'H.E Pro. Birhanu Nega'}}
        </p>
        <p class="text-left text-mgray text-xs tracking-wider">
            {{ $sector }}
        </p>
    </div>
</div>