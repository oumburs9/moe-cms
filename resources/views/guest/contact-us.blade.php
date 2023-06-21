<x-guest-layout>
    <x-page.banner title="Contact Us">
        <x-page.nav link="#" name="Contact Us" current />
    </x-page.banner>

    <section class=" container mx-auto">
        <div class="p-4 mx-auto max-w-3xl rounded-lg border-gray-50 shadow-md dark:bg-gray-800 lg:p-8">
            <form>
                <div class="grid md:gap-8 md:grid-cols-2">
                    <div class="mb-6"><label for="first_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First
                            name</label><input required="" type="text" id="first_name" placeholder="John"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-msky focus:border-msky block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-msky dark:focus:border-msky"
                            value=""></div>
                    <div class="mb-6"><label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last
                            name</label><input required="" type="text" id="last_name" placeholder="Doe"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value=""></div>
                </div>
                <div class="mb-6"><label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                        address</label><input required="" type="email" id="email" placeholder="john.doe@company.com"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value=""></div>
                <div class="mb-6"><label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label><input
                        required="" type="text" id="subject"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Subject name" value=""></div>
                <div class="mb-6"><label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Message</label><textarea
                        required="" id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Your message..."></textarea></div>
                <p class="mb-6 text-sm text-gray-500">By submitting this form you agree to our <a
                        class="text-blue-600 dark:text-blue-500 hover:underline" href="/terms-and-conditions/">Terms
                        &amp;
                        conditions</a> and our <a class="text-blue-600 dark:text-blue-500 hover:underline"
                        href="/privacy-policy/">Privacy Policy</a> which explains how we may collect, use and disclose
                    your
                    personal information including to third parties.</p><button
                    class="text-white font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center bg-mblue"
                    type="submit"><span class="flex justify-center items-center">Send message</span></button>
            </form>
        </div>


    </section>

</x-guest-layout>