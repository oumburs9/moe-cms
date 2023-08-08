<x-guest-layout>
    <x-page.banner title="Contact Us">
        <x-page.nav link="#" name="Contact Us" current />
    </x-page.banner>

    <section class="container mx-auto my-24 space-y-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px] my-5 ">
            <x-contact.address name="phone" text="Call us we are happy to talk to you" link="tel:+25111553133"
                icon="phone-call" address="+25111553133" />

            <x-contact.address name="Email" text="You can email us on anything you want" link="mailto:moff@gmail.com"
                icon="envelope" address="moff@gmail.com" />

            <x-contact.address name="Location" text="Arada Sub-City, Addis Ababa, Ethiopia"
                link="https://goo.gl/maps/Lkh28ZjowRKqFntw8" icon="map-marker" address=" View on Google Map" />
        </div>


        <div class="flex flex-wrap items-center justify-between gap-20 lg:flex-nowrap">
            <div class="flex w-full max-w-2xl">
                <img src="https://img.freepik.com/free-vector/contact-us-concept-illustration_114360-2299.jpg?w=1380&t=st=1671615381~exp=1671615981~hmac=2708d84b14f468cbaee071565b9b83322e78cceb28196c7ea704bbe5a7246909"
                    alt="" srcset="" class="object-cover w-full lg:max-h-[550px]">
            </div>

            <div
                class="flex w-full p-4 mx-auto border lg:rounded-xl border-mwhite bg-gradient-to-l from-mblue/5 dark:bg-gray-800 lg:p-8">
                <form class="w-full">
                    <h3 class="mb-6 text-2xl font-bold leading-normal text-mblue">Get in touch !</h3>
                    <div class="grid md:gap-8 md:grid-cols-2">
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">
                                Name</label>
                            <input required="" type="text" id="name" placeholder="John"
                                class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mblue focus:border-mblue block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mblue dark:focus:border-mblue"
                                value="">
                        </div>
                        <div class="mb-6"><label for="email"
                                class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Email
                                address</label><input required="" type="email" id="email"
                                placeholder="john.doe@company.com"
                                class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mblue focus:border-mblue block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mblue dark:focus:border-mblue"
                                value=""></div>
                    </div>

                    <div class="mb-6"><label for="subject"
                            class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Subject</label><input
                            required="" type="text" id="subject"
                            class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mblue focus:border-mblue block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mblue dark:focus:border-mblue"
                            placeholder="Subject name" value=""></div>

                    <div class="mb-6"><label for="message"
                            class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-400">Message</label><textarea
                            required="" id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-mblue focus:border-mblue dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mblue dark:focus:border-mblue"
                            placeholder="Your message..."></textarea>
                    </div>

                    {{-- <p class="mb-6 text-sm text-gray-500">By submitting this form you agree to our <a
                            class="text-blue-600 dark:text-mblue hover:underline" href="/terms-and-conditions/">Terms
                            &amp;
                            conditions</a> and our <a class="text-blue-600 dark:text-mblue hover:underline"
                            href="/privacy-policy/">Privacy Policy</a> which explains how we may collect, use and
                        disclose
                        your
                        personal information including to third parties.</p> --}}
                    <button type="button"
                        class="px-5 py-3 text-white shadow-lg btn bg-mblue hover:bg-mblue border-mblue hover:border-mblue rounded-xl hover:shadow-mblue">
                        Send Message
                    </button>
                </form>
            </div>
        </div>



    </section>

</x-guest-layout>