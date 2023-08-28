<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="relative h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <!-- Logo -->
        <div class="flex items-center pb-4 border-b border-gray-200 shrink-0">
            <a href="{{ route('dashboard') }}">
                <x-application-mark h="7rem" />
            </a>
            <span class="px-3 font-semibold leading-tight text-gray-600">Website Management</span>
        </div>

        <x-side-navigation.nav />
        {{-- <x-side-navigation.footer /> --}}
    </div>
</aside>