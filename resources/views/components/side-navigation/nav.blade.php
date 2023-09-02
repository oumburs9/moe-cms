<div class="flex flex-col flex-1 mt-5">
    <nav class="flex-1 pb-4 space-y-1">

        <div class="pb-4 space-y-1">
            <p class="px-3 pb-1 text-xs text-gray-400 uppercase">main</p>
            <x-side-navigation.link href="/dashboard" name="Dashboard" icon="chart-pie-alt"
                :active="request()->routeIs('dashboard')" wire:navigate />

            <x-side-navigation.link href="/" name="Website" icon="browser" :active="request()->routeIs('home')" />

            @can('user-list')
            <x-side-navigation.link href="{{ route('users.index') }}" name="Users" icon="user"
                :active="request()->routeIs('users.*')" wire:navigate />
            @endcan

            @can('user-list')
            <x-side-navigation.link href="{{ route('access-level') }}" name="Access Level" icon="unlock"
                :active="request()->routeIs('access-level')" />
            @endcan

            @can('role-list')
            <x-side-navigation.link href="{{ route('roles.index') }}" name="Roles" icon="key"
                :active="request()->routeIs('roles.*')" />
            @endcan
        </div>

        {{-- WEB PAGE MANAGEMENT --}}
        @can('content-manager')
        <div class="py-4 space-y-1">
            <p class="px-3 pb-1 text-xs text-gray-400 uppercase">Web Page Management</p>
            <x-side-navigation.link href="{{ route('slide.list') }}" name="Slide" icon="picture"
                :active="request()->routeIs(['slide.list', 'slide.edit', 'slide.add'])" wire:navigate />


            <x-sub-menu :activeLink="( request()->routeIs(['dashboard']) )" name="About" icon="info">
                <x-side-navigation.link href="{{ route('slide.list') }}" name="Mission, Vision ..."
                    icon="hands-holding-diamond" :active="request()->routeIs(['slide.list'])" wire:navigate />

                <x-side-navigation.link href="{{ route('slide.list') }}" name="Power & Duties" icon="circle-p"
                    :active="request()->routeIs(['slide.list'])" />

                <x-side-navigation.link href="{{ route('slide.list') }}" name="Who is Who" icon="id-card-clip-alt"
                    :active="request()->routeIs(['slide.list'])" wire:navigate />

                <x-side-navigation.link href="{{ route('slide.list') }}" name="Partners & Stack ..." icon="puzzle"
                    :active="request()->routeIs(['slide.list', 'slide.edit', 'slide.add'])" />

                <x-side-navigation.link href="{{ route('slide.list') }}" name="Sector Institutions" icon="city"
                    :active="request()->routeIs(['slide.list'])" />

                <x-side-navigation.link href="{{ route('slide.list') }}" name="Fact Sheet" icon="document"
                    :active="request()->routeIs(['slide.list'])" />

                <x-side-navigation.link href="{{ route('slide.list') }}" name="History" icon="time-past"
                    :active="request()->routeIs(['slide.list'])" />
            </x-sub-menu>

            <x-sub-menu :activeLink="( request()->routeIs(['dashboard']) )" name="Education Sector" icon="folder-tree">
                <x-side-navigation.link href="{{ route('slide.list') }}" name="General Education" icon="folder"
                    :active="request()->routeIs(['slide.list'])" wire:navigate />

                <x-side-navigation.link href="{{ route('slide.list') }}" name="Higher Education" icon="folder"
                    :active="request()->routeIs(['slide.list'])" />
            </x-sub-menu>

            <x-side-navigation.link href="{{ route('news.list') }}" name="Resources" icon="add-folder"
                :active="request()->routeIs(['news.list'])" />

            <x-side-navigation.link href="{{ route('news.list') }}" name="Announcement" icon="bullhorn"
                :active="request()->routeIs(['news.list'])" />

            <x-side-navigation.link href="{{ route('news.list') }}" name="Media" icon="photo-video"
                :active="request()->routeIs(['news.list'])" />

        </div>


        <div class="py-4 space-y-1">
            <p class="px-3 pb-1 text-xs text-gray-400 uppercase">Contact</p>
            <x-side-navigation.link href="{{ route('message') }}" name="Messages" icon="comment-alt-dots"
                :active="request()->routeIs('message')" />

            <x-side-navigation.link href="{{ route('social') }}" name="Social Links" icon="link"
                :active="request()->routeIs('social')" />
        </div>
        @endcan
        <div class="py-4 space-y-1">
            <p class="px-3 pb-1 text-xs text-gray-400 uppercase">Setting</p>
            <x-side-navigation.link href="{{ route('social') }}" name="General Setting" icon="settings"
                :active="request()->routeIs('social')" />
        </div>
    </nav>
</div>