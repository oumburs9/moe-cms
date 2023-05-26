<!-- Start Navbar -->

<nav class="bg-white dark:bg-gray-900 fixed w-full z-40 top-0 left-0">
    <div class="container flex flex-wrap items-center justify-between mx-auto px-4">
        <x-navbar.logo />
        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">About
                        Us
                        <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Mission, Vision & Values
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Power and Duties
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Organizational Structure
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Who Is Who
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Partners & Stakeholders
                                </a>
                            </li>

                            <li aria-labelledby="dropdownNavbarLink">
                                <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                    data-dropdown-placement="right-start" type="button"
                                    class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Sector Institution
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div id="doubleDropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="doubleDropdownButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                                                University
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                                                Guidelines & Standards
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                                                Regional bureau
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                                                Agencies
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                                                CTE
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                                out</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-full container mx-auto h-3.5 flex">
        <div class="bg-yellow h-full w-3/12 xl:rounded-l-full"></div>
        <div class="bg-red h-full w-4/12"></div>
        <div class="bg-sky h-full w-2/12"></div>
        <div class="bg-blue h-full w-3/12 xl:rounded-r-full"></div>
    </div>
</nav>

{{-- <nav id="topnav" class="defaultscroll is-sticky">
    <div class="flex items-center justify-between mx-2 sm:mx-10">
        <!-- Logo container-->


        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light justify-end">
                <li><a href="/" class="sub-menu-item">Home</a></li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">About Us</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="#" class="sub-menu-item">Mission, Vision & Values</a></li>
                        <li><a href="#" class="sub-menu-item">Power and Duties</a></li>
                        <li><a href="#" class=" sub-menu-item">Organizational Structure</a></li>
                        <li><a href="#" class="sub-menu-item">Who Is Who</a></li>
                        <li><a href="#" class="sub-menu-item">Partners & Stakeholders</a></li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Sector Institution</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="#" class="sub-menu-item">University</a></li>
                                <li><a href="#" class="sub-menu-item">Guidelines & Standards</a></li>
                                <li><a href="#" class=" sub-menu-item">Regional bureau</a></li>
                                <li><a href="#" class="sub-menu-item">Agencies</a></li>
                                <li><a href="#" class="sub-menu-item">CTE</a></li>
                            </ul>
                        </li>

                        <li><a href="#" class="sub-menu-item">Fact Sheet</a></li>
                        <li><a href="#" class="sub-menu-item">History</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Education Sector</a> <span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">General Education </a><span class="pl-1 submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="#" class="sub-menu-item"> Chief Excutive Offices </a></li>
                                <li><a href="page-services.html" class="sub-menu-item">Desk Excutive Offices </a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Higher Education</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="#" class="sub-menu-item"> Chief Excutive Offices </a></li>
                                <li><a href="page-services.html" class="sub-menu-item">Desk Excutive Offices </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Resources</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="#" class="sub-menu-item">Policies & Strategies</a></li>
                        <li><a href="#" class="sub-menu-item">Guidelines & Standards</a></li>
                        <li><a href="#" class=" sub-menu-item">Plans & Reports</a></li>
                        <li><a href="#" class="sub-menu-item">Annual Abstract</a></li>
                        <li><a href="#" class="sub-menu-item">Digital Library & E-learning</a></li>
                        <li><a href="#" class=" sub-menu-item">others</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Announcement</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="#" class="sub-menu-item">Job Vacancy</a></li>
                        <li><a href="#" class="sub-menu-item">Tender</a></li>
                        <li><a href="#" class=" sub-menu-item">Notices</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Media</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="#" class="sub-menu-item">News</a></li>
                        <li><a href="#" class="sub-menu-item">Press Release</a></li>
                        <li><a href="#" class=" sub-menu-item">Photo Gallery</a></li>
                        <li><a href="#" class="sub-menu-item">Video</a></li>
                        <li><a href="#" class=" sub-menu-item">Magazine</a></li>
                    </ul>
                </li>

                <li><a href="contact-one.html" class="sub-menu-item">Contact Us</a></li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->

</nav> --}}