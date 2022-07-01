<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('Edit Permission') }}
                </h2>
            </div>
            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('admin.permissions.index') }} " class=""> Back </a>
                </x-button>
            </div>
        </div>
    </x-slot>

    <!--Success Message -->
    @if (session('success'))
        <div class="bg-blue-500 text-sm text-gray-100 w-full rounded-md p-3 my-3 justify-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="p-6 overflow-hidden bg-white rounded-lg shadow dark:bg-dark-eval-1 dark:text-gray-400">
        <div class="bg-violet-50 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <div class="p-4 bg-violet-50 dark:bg-dark-eval-1">
                <!--Error Message -->
                <div class="my-2 col-span-6 sm:col-span-4">
                    @error('name')
                        <span class="text-red-500 text-sm"> {{ $message }}</span>
                    @enderror
                </div>
                <form action=" {{ route('admin.permissions.update', $permission) }} " method="POST"
                    class="bg-violet-50 p-6 rounded-lg dark:bg-dark-bg">
                    @csrf
                    @method('PUT')
                    <div class="col-span-6 sm:col-span-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Permission</label>
                        <input type="text" name="name" value=" {{ $permission->name }} " id="name" autocomplete="name"
                        class="mt-1 focus:ring-blue-200 focus:border-blue-200 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-dark-eval-1">
                    </div>
                    <div class="px-4 py-3 text-right sm:px-6">
                        <x-button type="submit">Update</x-button>
                    </div>
                </form>
            </div>
            <!--Assign Role -->
            <div class="mt-2 p-4 bg-white dark:bg-dark-eval-1">
                <h2 class="text-lg font-semibold">Role</h2>
                <div class="flex flex-col w-[180px] justify-start space-y-2 md:flex-row md:space-x-2">
                    @if ($permission->roles)
                        @foreach ($permission->roles as $permission_role)
                            <form action=" {{ route('admin.permissions.roles.remove', [$permission->id, $permission_role->id]) }} " method="POST" onsubmit="return confirm('Are you sure?');"
                                class="px-4 py-2 text-gray-700 bg-violet-50 hover:bg-violet-100 rounded-md dark:bg-dark-bg dark:text-gray-400">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex items-center justify-between space-x-1">
                                    <span>{{ $permission_role->name }}</span>
                                    <svg class="h-4 w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </form>
                        @endforeach
                    @endif
                </div>
                <div class=" mt-2">
                    <div class="my-2 col-span-6 sm:col-span-4">
                        @error('name')
                            <span class="text-red-500 text-sm"> {{ $message }}</span>
                        @enderror
                    </div>
                    <form action=" {{ route('admin.permissions.roles', $permission->id) }} " method="POST"
                        class="bg-violet-50 p-6 rounded-lg dark:bg-dark-bg">
                        @csrf
                        <div class="col-span-6 sm:col-span-4">
                            <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Asign Role</label>
                            <select id="role" name="role"  autocomplete="role-name" class="mt-1 block w-full py-2 px-3 shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-dark-eval-1">
                                @foreach ($roles as $role)
                                    <option value=" {{ $role->name }} "> {{ $role->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="px-4 py-3 text-right sm:px-6">
                            <x-button type="submit">
                                Assign
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
