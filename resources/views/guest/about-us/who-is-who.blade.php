<x-guest-layout>
    <x-page.banner title="Who is Who">
        <x-page.nav link="#" name="About Us" />
        <x-page.nav link="#" name="Who is Who" current />
    </x-page.banner>

    <section class="relative py-10 sm:py-16 lg:py-24">
        <div class="container justify-between px-4 mx-auto mb-20 sm:px-6 lg:px-8 max-w-9xl">
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



        <div class="container justify-between px-4 mx-auto mb-20 mt-36 sm:px-6 lg:px-8 max-w-9xl">
            <x-section.title title="General Education Development" />
            <div class="grid items-center mt-10 mb-20 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-28">
                <x-ministers.card name="Susan Miller" title="Teachers and Educational leaders development"
                    image="https://cdn.devdojo.com/images/july2021/paul-richards.jpg" sector="General Education" />

                <div class="grid col-span-2 gap-10 xl:col-span-3 md:grid-cols-2 xl:grid-cols-3">
                    <x-ministers.card2 name="Paul Denson" position="Network Engineer"
                        photo="https://cdn.devdojo.com/images/june2021/avt-03.jpg" />
                    <x-ministers.card2 name="Yordanos Ayalew" position="Network Engineer"
                        photo="https://cdn.devdojo.com/images/july2021/01-John-Cremson.jpg" />
                    <x-ministers.card2 name="Mike Melcher" position="Marketing Manager"
                        photo="https://cdn.devdojo.com/images/july2021/03-Mike-Melcher.jpg" />
                    <x-ministers.card2 name="Yordanos Ayalew" position="Network Engineer" />
                </div>
            </div>

            <div class="grid items-center mt-10 mb-20 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-28">
                <x-ministers.card name="Barbara Sanchez" title="Curriculum development executive"
                    image="https://cdn.devdojo.com/images/july2021/04-Barbara-Sanchez.jpg" sector="General Education" />

                <div class="grid col-span-2 gap-10 xl:col-span-3 md:grid-cols-2 xl:grid-cols-3">
                    <x-ministers.card2 name="Yordanos Ayalew" position="Network Engineer"
                        photo="https://cdn.devdojo.com/images/july2021/05-Sam-Lee.jpg"
                        department="Language and Co-curricular education curriculum desk" />
                    <x-ministers.card2 name="Yordanos Ayalew" position="Network Engineer"
                        photo="https://cdn.devdojo.com/images/july2021/07-Jeremy-Deen.png" />
                    <x-ministers.card2 name="Yordanos Ayalew" position="Network Engineer" />
                    <x-ministers.card2 name="Yordanos Ayalew" position="Network Engineer"
                        photo="https://cdn.devdojo.com/images/july2021/08-Susan-Miller.jpg" />
                </div>
            </div>
        </div>
        <x-section.banner />
    </section>
</x-guest-layout>