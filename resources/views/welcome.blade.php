<x-guest-layout>
    @php
    $faker = \Faker\Factory::create();
    @endphp
    {{-- slide images --}}
    <x-home-slide.slide type="slide" buttons>
        <x-home-slide.item
            image="https://media.istockphoto.com/id/862945038/photo/african-little-girl-is-learning-english-language.jpg?s=612x612&w=0&k=20&c=7wkvXLQpZnmQrXwheGhXQZZdApL0tvF_7v-GCNhYnSI=" />

        <x-home-slide.item image="https://ethiopia.britishcouncil.org/sites/default/files/1.jpg" textposition="left" />

        <x-home-slide.item image="https://www.inputfortwayne.com/galleries/highschoolgrads.jpg" textposition="center" />

        <x-home-slide.item image="https://www.educationcannotwait.org/sites/default/files/2022-12/uni210627.jpeg"
            textposition="right" />

        <x-home-slide.item
            image="https://media.istockphoto.com/id/622035110/photo/african-little-girl-during-math-class-southern-ethiopia-east-africa.jpg?s=612x612&w=0&k=20&c=CSg6L_OVvqDqnZiPSlPNmIxfV_AvHet8eLK-Z8Y6wGI=" />

        <x-home-slide.item image="https://i.pinimg.com/originals/6a/11/56/6a1156b0697df0394196541b74cc58af.jpg"
            textposition="left" />

        <x-home-slide.item
            image="https://img.freepik.com/premium-photo/everyone-will-be-so-proud-me-shot-young-woman-taking-selfies-graduation-day_590464-61541.jpg"
            textposition="right" />
    </x-home-slide.slide>

    {{-- Education sector --}}
    <section class="relative py-10 sm:py-16 lg:py-24 ">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 container">
            <x-section.title title="Education Sector" />
            <div
                class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-2 gap-x-16 gap-y-12">
                <div
                    class=" py-4 px-6 rounded-lg shadow-xl shadow-sky/40 hover:shadow-sky/60 bg-sky hover:-translate-y-1 transition-transform cursor-pointer">
                    <p class="text-3xl font-semibold mb-4 text-[#fff]">General Education Development Sector</p>
                    <ul class="text-[#fff] space-y-2 px-1">
                        <li> <i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Curriculum development executive</li>
                        <li> <i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Teachers’ and Educational leaders’
                            development</li>
                        <li> <i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Educational Program and Quality
                            Improvement
                        </li>
                        <li> <i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Adult and non formal Education programs
                        </li>
                    </ul>
                </div>
                <div
                    class=" py-4 px-6 rounded-lg shadow-xl shadow-blue/40 hover:shadow-blue/60 bg-blue hover:-translate-y-1 transition-transform cursor-pointer">
                    <p class="text-3xl font-semibold  mb-4 text-white">Higher Education Development Sector</p>

                    <ul class="text-white space-y-2 px-1">
                        <li><i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Academic Affairs Executive</li>
                        <li><i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Research and Community Engagement
                            Executive
                        </li>
                        <li><i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Governance and Infrastructure executive
                        </li>
                        <li><i class="fi fi-rr-arrow-turn-down-right mr-2"></i> ICT and Digital Education executive</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-10 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 container">
            <x-section.title title="Our Recent News" />
            <div
                class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12 mb-10">
                <x-news.card />
                <x-news.card />
                <x-news.card />
                <x-news.card />
                <x-news.card />
                <x-news.card />
            </div>
        </div>
        {{-- <x-section.banner /> --}}
    </section>

    <section class=" relative py-10 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 container max-w-9xl mb-10">
            <x-section.title title="Our Ministers" />
            <div
                class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-28 gap-y-10">
                <x-ministers.card name="H.E Pro. Birhanu Nega" title="Minister"
                    image="https://moe.gov.et/storage/minimsg/%E1%8C%B0%E1%8C%B0%E1%8C%B02014_1634039719.jpg" />
                <x-ministers.card name=" H.E. Dr. Samuel Kifle (PhD)" title="STATE MINISTER" image="/samuel.jpg"
                    sector="Higher Education Sector" />
                <x-ministers.card name="  H.E Dr. Fanta Mandefro (PhD)" title="STATE MINISTER"
                    image="https://moe.gov.et/storage/minimsg/photo_2021-10-12_15-33-45_1634042442.jpg"
                    sector="General Education Sector" />
            </div>
        </div>
        <x-section.banner />
    </section>
</x-guest-layout>