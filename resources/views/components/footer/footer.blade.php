<!-- Footer Start -->
<footer
    class="relative  footer bg-gradient-to-br from-white via-white to-blue/40 text-gray-500 dark:text-gray-200 px-4">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-3 md:col-span-12">
                            <div class=" relative flex flex-col h-40 justify-center">
                                <div class=" absolute inset-0 w-40 flex items-end rotate-90">
                                    <div class="bg-yellow h-3.5 w-3/12 rounded-l-full"></div>
                                    <div class="bg-red h-3.5 w-4/12"></div>
                                    <div class="bg-sky h-3.5 w-2/12"></div>
                                    <div class="bg-blue h-3.5 w-3/12 rounded-r-full"></div>
                                </div>
                                <x-footer.logo />
                            </div>
                            <p class="mt-6 text-gray-600 max-w-xs">
                                FDRE Ministry of Education is a Governmental Organization
                                Headquartered in Arada sub-city, Addis Ababa, Ethiopia
                            </p>

                            <x-footer.social-links />
                            <!--end icon-->
                        </div>
                        <!--end col-->

                        <div class="lg:col-span-3 md:col-span-4 mt-5">
                            <h5 class="tracking-[1px] text-gray-600 font-semibold ml-1">Menu</h5>
                            <ul class="list-none footer-list mt-6">
                                <x-footer.link name="Home" />
                                <x-footer.link name="Mission, Vision & Values" />
                                <x-footer.link name="Organizational Structure" />
                                <x-footer.link name="Power and Duties" />
                                <x-footer.link name="Who Is Who" />
                                <x-footer.link name="Partners & Stakeholders" />
                                <x-footer.link name="History" />
                            </ul>
                        </div>
                        <!--end col-->

                        <div class="lg:col-span-3 md:col-span-4 mt-5">
                            <h5 class="tracking-[1px] text-gray-600 font-semibold">Usefull Links</h5>
                            <ul class="list-none footer-list mt-6">
                                <x-footer.link name="Policies & Strategies" />
                                <x-footer.link name="Guidelines & Standards" />
                                <x-footer.link name="Plans & Reports" />
                                <x-footer.link name="Annual Abstract" />
                                <x-footer.link name="Digital Library & E-learning" />
                                <x-footer.link name="Notices" />
                                <x-footer.link name="News" />
                            </ul>
                        </div>
                        <!--end col-->

                        <div class="lg:col-span-3 md:col-span-4 mt-5">
                            <h5 class="tracking-[1px] text-gray-600 font-semibold">Contact Us</h5>
                            <p class="mt-6 text-gray-500">
                                We value your input and want to hear from you. If you have any questions or feedbacks
                                about our services, please contact us.
                            </p>
                            <p class="mt-6 text-gray-600 font-semibold">Working Hours</p>
                            <p class="text-gray-500">Monday to Friday <br> 2:30 - 11:00 local time</p>

                            @guest
                            <a href="/contact-us" class="grid grid-cols-1 mt-5">
                                <button type="button" id="submitsubscribe" name="send"
                                    class="py-3 btn bg-blue hover:bg-blue border-blue hover:border-blue text-white rounded-xl shadow-lg hover:shadow-blue">
                                    Contact Us
                                </button>
                            </a>
                            @endguest

                            @auth
                            <a href="/register" class="grid grid-cols-1 mt-5">
                                <button type="button" id="submitsubscribe" name="send"
                                    class="py-3 btn bg-red hover:bg-red border-red hover:border-red text-white rounded-xl shadow-lg hover:shadow-red">
                                    Dashborad
                                </button>
                            </a>
                            @endauth
                        </div>
                        <!--end col-->
                    </div>
                    <!--end grid-->
                </div>
                <!--end col-->
            </div>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->
    <div class="px-0 backdrop:blur-lg border-t border-light/40">
        <div class="py-[10px] container mx-auto">
            <p class="text-sm flex mb-0 w-full justify-center lg:justify-end items-center">
                © {{ now()->year }} FDRE Ministry of Education
                <span>
                    <img src="/ethiopia.png" alt="ethiopian flag" srcset="" class="w-5 mx-1">
                </span>
            </p>
            <!--end grid-->
        </div>
        <!--end container-->
    </div>
</footer>
<!--end footer-->
<!-- Footer End -->