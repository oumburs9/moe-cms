@props(['name'=>'', 'text'=>'', 'link'=>'#', 'address'=>'', 'icon'=>'marker'])

<div class="px-6 mt-6 text-center group">
    <div
        class="flex items-center justify-center w-20 h-20 mx-auto text-3xl align-middle transition-all shadow-md cursor-pointer text-mblue bg-mblue/5 rounded-xl group-hover:bg-myellow group-hover:shadow-myellow/50">
        <i class="fi fi-rr-{{ $icon }}"></i>
    </div>

    <div class=" mt-7">
        <h5 class="text-xl font-bold capitalize text-mdark">{{ $name }}</h5>
        <p class="mt-3 text-mgray">
            {{ $text }}
        </p>

        <div class="mt-5">
            <a href="{{ $link }}"
                class="font-bold duration-500 ease-in-out text-mblue hover:text-mblue after:bg-mblue group-hover:underline">
                {{ $address }}
            </a>
        </div>
    </div>
</div>