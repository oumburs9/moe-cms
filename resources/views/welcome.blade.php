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
        <div class="container px-4 mx-auto sm:px-6 lg:px-8">
            <x-section.title title="Education Sector" />
            <div
                class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-2 gap-x-16 gap-y-12">
                <a href="{{ route('general-education') }}">
                    <div
                        class="px-6 py-4 transition-transform rounded-lg shadow-xl cursor-pointer shadow-msky/40 hover:shadow-msky/60 bg-msky hover:-translate-y-1">
                        <p class="text-3xl font-semibold mb-4 text-[#fff]">General Education Development Sector</p>
                        <ul class="text-[#fff] space-y-2 px-1">
                            <li> <i class="mr-2 fi fi-rr-arrow-turn-down-right"></i> Curriculum development executive
                            </li>
                            <li> <i class="mr-2 fi fi-rr-arrow-turn-down-right"></i> Teachers’ and Educational leaders’
                                development</li>
                            <li> <i class="mr-2 fi fi-rr-arrow-turn-down-right"></i> Educational Program and Quality
                                Improvement
                            </li>
                            <li> <i class="mr-2 fi fi-rr-arrow-turn-down-right"></i> Adult and non formal Education
                                programs
                            </li>
                        </ul>
                    </div>
                </a>

                <a href="{{ route('higher-education') }}">
                    <div
                        class="px-6 py-4 transition-transform rounded-lg shadow-xl cursor-pointer shadow-mblue/40 hover:shadow-mblue/60 bg-mblue hover:-translate-y-1">
                        <p class="mb-4 text-3xl font-semibold text-white">Higher Education Development Sector</p>

                        <ul class="px-1 space-y-2 text-white">
                            <li><i class="mr-2 fi fi-rr-arrow-turn-down-right"></i> Academic Affairs Executive</li>
                            <li><i class="mr-2 fi fi-rr-arrow-turn-down-right"></i> Research and Community Engagement
                                Executive
                            </li>
                            <li><i class="mr-2 fi fi-rr-arrow-turn-down-right"></i> Governance and Infrastructure
                                executive
                            </li>
                            <li><i class="mr-2 fi fi-rr-arrow-turn-down-right"></i> ICT and Digital Education executive
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <x-section.divider />
        </div>
    </section>

    <section class="relative pb-10 sm:pb-16 lg:pb-24">
        <div class="container px-4 mx-auto sm:px-6 lg:px-8">
            <x-section.title title="Our Recent News" />
            <div
                class="grid max-w-md grid-cols-1 mx-auto mt-12 mb-10 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
                <x-news.card />
                <x-news.card />
                <x-news.card />
                <x-news.card />
                <x-news.card />
                <x-news.card />
            </div>
            <x-section.divider />
        </div>
        {{-- <x-section.banner /> --}}
    </section>

    <section class="relative pb-24">
        <div class="container justify-between px-4 mx-auto mb-10 sm:px-6 lg:px-8 max-w-9xl">
            <x-section.title title="Our Ministers" />
            <div class="grid max-w-md grid-cols-1 mt-12 lg:max-w-5xl lg:mt-16 lg:grid-cols-3 gap-x-28 gap-y-10">
                <x-ministers.card name="H.E Pro. Birhanu Nega" title="Minister"
                    image="https://moe.gov.et/storage/minimsg/%E1%8C%B0%E1%8C%B0%E1%8C%B02014_1634039719.jpg" />
                <x-ministers.card name=" H.E. Dr. Samuel Kifle (PhD)" title="STATE MINISTER" image="/samuel.jpg"
                    sector="Higher Education Sector" />
                <x-ministers.card name="  H.E Dr. Fanta Mandefro (PhD)" title="STATE MINISTER"
                    image="https://moe.gov.et/storage/minimsg/photo_2021-10-12_15-33-45_1634042442.jpg"
                    sector="General Education Sector" />
            </div>
            <x-section.divider />
        </div>
    </section>

    <section class="relative pb-24">
        <div class="container px-4 mx-auto mb-10 sm:px-6 lg:px-8 max-w-9xl">
            <x-section.title title="Organization structure"
                subtitle="This is The Main Education Sector Development Organization Structure Chart" />

            <div class="relative w-full max-w-lg mx-auto mt-16 border-2 border-b-0 border-myellow h-28 translate-y-14">
                <x-logo h="10rem" class="absolute inset-0 z-20 transition cursor-pointer bottom-full hover:scale-110">
                </x-logo>
            </div>

            <div class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:grid-cols-2 gap-x-5 gap-y-10">
                <x-org-chart.sector name="General Education Development">
                    <x-org-chart.excutive name="Curriculum development executive" color="msky">
                        <x-org-chart.desk deskname="Language and Co-curricular education curriculum desk" />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                    </x-org-chart.excutive>

                    <x-org-chart.excutive name="Teachers’ and Educational leaders’ development" color="msky">
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                    </x-org-chart.excutive>

                    <x-org-chart.excutive name="Educational Program and Quality Improvement" color="msky"
                        direction="right">
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                    </x-org-chart.excutive>

                    <x-org-chart.excutive name="Adult and non formal Education programs" color="msky" direction="right">
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                    </x-org-chart.excutive>
                </x-org-chart.sector>

                <x-org-chart.sector name="Higher Education Development" color="mblue">
                    <x-org-chart.excutive name="Academic Affairs Executive" color="mblue">
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                    </x-org-chart.excutive>

                    <x-org-chart.excutive name="Research and Community Engagement Executive" color="mblue">
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                    </x-org-chart.excutive>

                    <x-org-chart.excutive name="Governance and Infrastructure executive" direction="right"
                        color="mblue">
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                    </x-org-chart.excutive>

                    <x-org-chart.excutive name="ICT and Digital Education executive" direction="right" color="mblue">
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                        <x-org-chart.desk />
                    </x-org-chart.excutive>
                </x-org-chart.sector>
            </div>
        </div>

    </section>
</x-guest-layout>