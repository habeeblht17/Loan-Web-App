<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <!-- Dashboard -->
    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

     <!-- Create Loan -->
     <x-sidebar.link title="Create Loan" href=" {{ route('loan.create') }} " :isActive="request()->routeIs('loan.create')">
        <x-slot name="icon">
            <x-icons.empty-circle class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <!-- UserProfile -->
    <x-sidebar.link title="Update Profile" href=" {{ route('userProfiles.create') }} " :isActive="request()->routeIs('userProfiles.crete')">
        <x-slot name="icon">
            <x-icons.userProfile class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <!--
    <x-sidebar.dropdown title="Buttons" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
    </x-sidebar.dropdown>

    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">Dummy Links</div>
    -->

</x-perfect-scrollbar>
