<x-guest-layout>
    <x-page.banner title="Education Sector">
        <x-page.nav link="#" name="General Education" current />
    </x-page.banner>

    {{-- Education sector --}}
    <section class="relative py-10 mb-16">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 container">
            <div
                class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-2 gap-x-16 gap-y-12">
                <a href="{{ route('general-education') }}">
                    <div
                        class=" py-4 px-6 rounded-lg shadow-xl shadow-msky/40 hover:shadow-msky/60 bg-msky hover:-translate-y-1 transition-transform cursor-pointer">
                        <p class="text-3xl font-semibold mb-4 text-[#fff]">General Education Development Sector</p>
                        <ul class="text-[#fff] space-y-2 px-1">
                            <li> <i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Curriculum development executive
                            </li>
                            <li> <i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Teachers’ and Educational leaders’
                                development</li>
                            <li> <i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Educational Program and Quality
                                Improvement
                            </li>
                            <li> <i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Adult and non formal Education
                                programs
                            </li>
                        </ul>
                    </div>
                </a>

                <a href="{{ route('higher-education') }}">
                    <div
                        class=" py-4 px-6 rounded-lg shadow-xl shadow-mblue/40 hover:shadow-mblue/60 bg-mblue hover:-translate-y-1 transition-transform cursor-pointer">
                        <p class="text-3xl font-semibold  mb-4 text-white">Higher Education Development Sector</p>

                        <ul class="text-white space-y-2 px-1">
                            <li><i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Academic Affairs Executive</li>
                            <li><i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Research and Community Engagement
                                Executive
                            </li>
                            <li><i class="fi fi-rr-arrow-turn-down-right mr-2"></i> Governance and Infrastructure
                                executive
                            </li>
                            <li><i class="fi fi-rr-arrow-turn-down-right mr-2"></i> ICT and Digital Education executive
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </section>
</x-guest-layout>