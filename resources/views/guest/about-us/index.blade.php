<x-guest-layout>
    @yield('banner')
    <div class="container mx-auto font-am">
        <div class="grid grid-cols-8 gap-10 my-10 md:grid-cols-12">
            <div
                class="w-full col-span-8 px-4 prose max-w-7xl prose-mblue prose-headings:text-mblue prose-p:text-gray-500 prose-img:rounded-xl font-noto prose-strong:text-gray-700 prose-p:-mt-5">
                @yield('content')
            </div>

            <div class="w-full col-span-4 px-6 py-5 list-none rounded-lg bg-mwhite">
                <h2 class="mb-4 text-3xl font-black text-mblue">About Us</h2>
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

                <x-navbar.menu-link name="University" link="{{ route('universties') }}"
                    active="{{ request()->routeIs('universties') }}" />

                <x-navbar.menu-link name="Regional Bureau" link="{{ route('bureaus') }}"
                    active="{{ request()->routeIs('bureaus') }}" />

                <x-navbar.menu-link name="Agencies" link="{{ route('agencies') }}"
                    active="{{ request()->routeIs('agencies') }}" />

                <x-navbar.menu-link name="CTE" link="{{ route('ctes') }}" active="{{ request()->routeIs('ctes') }}" />

                <x-navbar.menu-link name="Fact Sheet" link="{{ route('fact-sheet') }}"
                    active="{{ request()->routeIs('fact-sheet') }}" />

                <x-navbar.menu-link name="History" link="{{ route('history') }}"
                    active="{{ request()->routeIs('history') }}" />
            </div>
        </div>
</x-guest-layout>