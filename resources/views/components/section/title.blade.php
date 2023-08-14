@props(['title', 'subtitle'])
<div class="max-w-2xl text-left border-mblue border-l-[5px] pl-5">
    <h2 class="text-3xl font-bold leading-tight text-mdark sm:text-4xl lg:text-5xl">
        {{ $title ?? "Latest from News"}}
    </h2>
    <p class="max-w-xl mt-4 text-base leading-relaxed text-gray-600">
        {{ $subtitle ?? ""}}
    </p>
</div>