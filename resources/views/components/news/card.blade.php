@props(['link'=>'#'])
@php
$image = random_int(1,9999);
$views = random_int(1,9999);
$faker = \Faker\Factory::create();
$paragraph = $faker->paragraph($nbSentences = 4, $variableNbSentences = true);
$title = $faker->sentence($nbWords = 6, $variableNbWords = true);
$text = $faker->text($maxNbChars = 300);
if($views > 1000){
$views_count=$views *1/1000;
$views_k=round($views_count,PHP_ROUND_HALF_UP);
$views = $views_k.'K';
}
else {
return $views;
}

@endphp
<div class="group">
    <a href="#" title=""
        class="relative block aspect-w-4 aspect-h-3  overflow-hidden group-hover:drop-shadow-md rounded">
        <img class="object-cover w-full h-full group-hover:scale-110 transition-transform delay-100 "
            src="https://picsum.photos/800/530?random={{ $image }}" alt="" />
        <span
            class=" absolute bottom-3 top-auto left-3 inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-xl text-[#fff] bg-{{ $faker->randomElement(['msky', 'mblue', 'mred', 'myellow']) }}">
            {{ $faker->word($nbWords = 1, $variableNbWords = false) }}
        </span>
    </a>

    <p class="mt-6 text-xl font-semibold">
        <a href="#" title="" class="text-dark transition-colors group-hover:text-mblue">
            {{ $title ??  "How to mange your remote team? "}}
        </a>
    </p>

    <p class="mt-4 text-mgray line-clamp-2">
        {{ $body ?? $paragraph }}
    </p>
    <div class="h-0 mt-6 mb-4 border-t-2 border-mlight/40 border-dashed"></div>

    <div class="flex justify-between text-gray-500 ">
        <span class="block text-sm font-bold tracking-widest uppercase">
            {{ $faker->dateTime()->format('M d, Y ') }}
        </span>
        <span class="flex items-center text-sm gap-x-1">
            <i class="flex fi fi-rr-eye"></i>
            {{ $views }}
        </span>
    </div>

</div>