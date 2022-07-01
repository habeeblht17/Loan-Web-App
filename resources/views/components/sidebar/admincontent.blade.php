<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    @hasrole('Super Admin|Agent')
    <!-- Dashboard -->
    <x-sidebar.link title="Dashboard" href="{{ route('admin.admindashboard') }}" :isActive="request()->routeIs('admin.admindashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endhasrole

    @hasrole('Super Admin')
     <!-- Expense -->
     <x-sidebar.link title="Create Expense" href=" {{ route('admin.expenses.create') }} " :isActive="request()->routeIs('admin.expenses.create')">
        <x-slot name="icon">
            <x-icons.empty-circle class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endhasrole

    @hasrole('Agent|Super Admin')
    <!-- UpdatePayment -->
    <x-sidebar.link title="Update Payment" href=" {{ route('admin.updatePayment') }} " :isActive="request()->routeIs('admin.updatePayment')">
        <x-slot name="icon">
            <x-icons.empty-circle class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endhasrole

    @hasrole('Super Admin')
    <!-- User -->
    <x-sidebar.link title="Users" href=" {{ route('admin.users.index') }} " :isActive="request()->routeIs('admin.users.index')">
        <x-slot name="icon">
            <x-icons.user class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endhasrole

    @hasrole('Super Admin')
    <!-- Role -->
    <x-sidebar.link title="Roles" href=" {{ route('admin.roles.index') }} " :isActive="request()->routeIs('admin.roles.index')">
        <x-slot name="icon">
            <x-icons.role class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endhasrole

    @hasrole('Super Admin')
    <!-- Permission -->
    <x-sidebar.link title="Permissions" href=" {{ route('admin.permissions.index') }} " :isActive="request()->routeIs('admin.permissions.index')">
        <x-slot name="icon">
            <x-icons.permission class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endhasrole

    @hasrole('Super Admin|Agent')
    <!-- Loan Application -->
    <x-sidebar.link title="Loan Applications" href=" {{ route('admin.status') }} " :isActive="request()->routeIs('admin.status')">
        <x-slot name="icon">
            <x-icons.applicantList class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    @endhasrole

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
