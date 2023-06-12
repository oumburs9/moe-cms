<!-- Start Navbar -->

<nav id="navbar"
    class="bg-white border-b border-mlight/40 dark:bg-gray-900 fixed w-full z-40 top-0 left-0 transition-all delay-500">
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

            <x-navbar.dropdown name="About Us" id="About"
                active="{{ request()->routeIs(['fact-sheet', 'mvav', 'power-duties', 'who-is-who', 'partners', 'universties', 'bureaus', 'agencies', 'ctes', 'fact-sheet', 'history', 'org-chart', 'sector-institutions' ]) }}">
                <x-navbar.menu-link name="Mission, Vision & Values" link="{{ route('mvav') }}"
                    active="{{ request()->routeIs('mvav') }}" />
                <x-navbar.menu-link name="Power and Duties" link="{{ route('power-duties') }}"
                    active="{{ request()->routeIs('power-duties') }}" />
                <x-navbar.menu-link name="Organizational Structure" link="{{ route('org-chart') }}"
                    active="{{ request()->routeIs('org-chart') }}" />
                <x-navbar.menu-link name="Who Is Who" link="{{ route('who-is-who') }}"
                    active="{{ request()->routeIs('who-is-who') }}" />
                <x-navbar.menu-link name="Partners & Stakeholders" link="{{ route('partners') }}"
                    active="{{ request()->routeIs('partners') }}" />

                <x-navbar.dropdown name="Sector Institution" icon="right" id="submenu" placement="right-start"
                    active="{{ request()->routeIs(['universties','bureaus','agencies','ctes','sector-institutions']) }}">
                    <x-navbar.menu-link name="University" link="{{ route('universties') }}"
                        active="{{ request()->routeIs('universties') }}" />
                    <x-navbar.menu-link name="Regional Bureau" link="{{ route('bureaus') }}"
                        active="{{ request()->routeIs('bureaus') }}" />
                    <x-navbar.menu-link name="Agencies" link="{{ route('agencies') }}"
                        active="{{ request()->routeIs('agencies') }}" />
                    <x-navbar.menu-link name="CTE" link="{{ route('ctes') }}"
                        active="{{ request()->routeIs('ctes') }}" />
                </x-navbar.dropdown>
                <x-navbar.menu-link name="Fact Sheet" link="{{ route('fact-sheet') }}"
                    active="{{ request()->routeIs('fact-sheet') }}" />
                <x-navbar.menu-link name="History" link="{{ route('history') }}"
                    active="{{ request()->routeIs('history') }}" />
            </x-navbar.dropdown>

            <x-navbar.dropdown name="Education Sector" id="sector"
                active="{{ request()->routeIs(['general-education', 'higher-education', 'education-sector']) }}">
                <x-navbar.menu-link name="General Education" link="{{ route('general-education') }}"
                    active="{{ request()->routeIs('general-education') }}" />
                <x-navbar.menu-link name="Higher Education" link="{{ route('higher-education') }}"
                    active="{{ request()->routeIs('higher-education') }}" />
            </x-navbar.dropdown>

            <x-navbar.dropdown name="Resources" id="resource"
                active="{{ request()->routeIs(['policies','guidelines','plans','abstract','digital-library']) }}">
                <x-navbar.menu-link name=" Policies & Strategies" link="{{ route('policies') }}"
                    active="{{ request()->routeIs('policies') }}" />
                <x-navbar.menu-link name="Guidelines & Standards" link="{{ route('guidelines') }}"
                    active="{{ request()->routeIs('guidelines') }}" />
                <x-navbar.menu-link name="Plans & Reports" link="{{ route('plans') }}"
                    active="{{ request()->routeIs('plans') }}" />
                <x-navbar.menu-link name="Annual Abstract" link="{{ route('abstract') }}"
                    active="{{ request()->routeIs('abstract') }}" />
                <x-navbar.menu-link name="Digital Library & E-learning" link="{{ route('digital-library') }}"
                    active="{{ request()->routeIs('digital-library') }}" />
                <x-navbar.menu-link name="Others" />
            </x-navbar.dropdown>

            <x-navbar.dropdown name="Announcement" id="Announcement"
                active="{{ request()->routeIs(['vacancy', 'tender', 'notices']) }}">
                <x-navbar.menu-link name="Job Vacancy" link="{{ route('vacancy') }}"
                    active="{{ request()->routeIs('vacancy') }}" />
                <x-navbar.menu-link name="Tender" link="{{ route('tender') }}"
                    active="{{ request()->routeIs('tender') }}" />
                <x-navbar.menu-link name="Notices" link="{{ route('notices') }}"
                    active="{{ request()->routeIs('notices') }}" />
            </x-navbar.dropdown>

            <x-navbar.dropdown name="Media" id="Media"
                active="{{ request()->routeIs(['news','press-release','magazine','gallery']) }}">
                <x-navbar.menu-link name="News" link="{{ route('news') }}" active="{{ request()->routeIs('news') }}" />
                <x-navbar.menu-link name="Press Release" link="{{ route('press-release') }}"
                    active="{{ request()->routeIs('press-release') }}" />
                <x-navbar.menu-link name="Magazine" link="{{ route('magazine') }}"
                    active="{{ request()->routeIs('magazine') }}" />
                <x-navbar.menu-link name="Gallery" link="{{ route('gallery') }}"
                    active="{{ request()->routeIs('gallery') }}" />
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