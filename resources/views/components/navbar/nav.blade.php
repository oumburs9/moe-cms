<!-- Start Navbar -->

<nav id="navbar"
    class="bg-white border-b border-light/40 dark:bg-gray-900 fixed w-full z-40 top-0 left-0 transition-all delay-500">
    <div class="container flex flex-wrap via-white items-center justify-between mx-auto px-4">
        <x-navbar.logo />
        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <x-navbar.menu>
            <x-navbar.menu-link name="Home" link="/" active="{{ request()->routeIs('home') }}" />

            <x-navbar.dropdown name="About Us" id="About">
                <x-navbar.menu-link name="Mission, Vision & Values" link="#"
                    active="{{ request()->routeIs('home') }}" />
                <x-navbar.menu-link name="Power and Duties" />
                <x-navbar.menu-link name="Organizational Structure" />
                <x-navbar.menu-link name="Who Is Who" />
                <x-navbar.menu-link name="Partners & Stakeholders" />
                <x-navbar.dropdown name="Sector Institution" icon="right" id="submenu" placement="right-start">
                    <x-navbar.menu-link name="University" />
                    <x-navbar.menu-link name="Regional Bureau" />
                    <x-navbar.menu-link name="Agencies" />
                    <x-navbar.menu-link name="CTE" />
                </x-navbar.dropdown>
                <x-navbar.menu-link name="Fact Sheet" />
                <x-navbar.menu-link name="History" />
            </x-navbar.dropdown>

            <x-navbar.dropdown name="Education Sector" id="sector">
                <x-navbar.menu-link name="General Education" />
                <x-navbar.menu-link name="Higher Education" />
            </x-navbar.dropdown>

            <x-navbar.dropdown name="Resources" id="resource">
                <x-navbar.menu-link name="Policies & Strategies" />
                <x-navbar.menu-link name="Guidelines & Standards" />
                <x-navbar.menu-link name="Plans & Reports" />
                <x-navbar.menu-link name="Annual Abstract" />
                <x-navbar.menu-link name="Digital Library & E-learning" />
                <x-navbar.menu-link name="Others" />
            </x-navbar.dropdown>

            <x-navbar.dropdown name="Announcement" id="Announcement">
                <x-navbar.menu-link name="Job Vacancy" />
                <x-navbar.menu-link name="Tender" />
                <x-navbar.menu-link name="Notices" />
            </x-navbar.dropdown>

            <x-navbar.dropdown name="Media" id="Media">
                <x-navbar.menu-link name="News" />
                <x-navbar.menu-link name="Press Release" />
                <x-navbar.menu-link name="Magazine" />
                <x-navbar.menu-link name="Gallery" />
            </x-navbar.dropdown>

            <x-navbar.lang-menu />
        </x-navbar.menu>

    </div>

</nav>
<script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
			// document.getElementById("navbar").style.height = "auto";
			document.getElementById("logo").style.height = "5rem";
            // document.getElementById("banner").style.height = "8px";
			// $('#banner').removeClass('h-3.5');
			
		} else {      
			document.getElementById("logo").style.height = "6rem";
			// document.getElementById("navbar").style.height = "auto";
            // document.getElementById("banner").style.height = "10px";
		}
	}
</script>