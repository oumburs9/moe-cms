<x-guest-layout>
    <x-page.banner title="Organizational Structure">
        <x-page.nav link="#" name="About Us" />
        <x-page.nav link="#" name="Organizational Structure" current />
    </x-page.banner>

    <section class=" relative py-10 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 container max-w-9xl mb-10">

            <div class="mx-auto mt-16 w-full border-2 border-myellow border-b-0 relative h-28 max-w-lg translate-y-14">
                <x-logo h="10rem" class="absolute inset-0 z-20 bottom-full hover:scale-110 transition cursor-pointer">
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