<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('User Detail') }}
                </h2>
            </div>
            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('admin.users.index') }} " class=""> Back </a>
                </x-button>
            </div>
        </div>
    </x-slot>
    <!-- Success and Error Messages -->
    @if (session('success'))
        <div class="bg-blue-500 text-sm text-gray-100 w-full rounded-md p-3 my-3 justify-center">
            {{ session('success') }}
        </div>
    @elseif (session('message'))
        <div class="text-sm text-red-500 w-full p-3 my-3 justify-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="p-6 overflow-hidden bg-white rounded-md shadow dark:bg-dark-eval-1 dark:text-gray-400">
        <div class="p-4 bg-violet-50  overflow-auto rounded-lg dark:bg-dark-eval-1">
            <!--outPut User-->
            <div class="mb-5 p-4 bg-violet-50 rounded-lg dark:bg-dark-bg">
                <div class="">
                    <h2 class="text-xl font-semibold p-1 mb-4 md:mb-2">User Information</h2>
                </div>
                <div>
                    <div class="flex flex-col items-center justify-between md:flex-row">
                        <!-- First -->
                        <div class="flex-col mb-4 md:mb-0">
                            <div class="rounded-lg w-[200px] dark:bg-dark-eval-1">
                                @if ($user->userProfile)
                                    <img src="{{ asset('images/' . $user->userProfile->image) }}" alt=""
                                    class="bg-white mb-2 rounded-lg w-[200px] h-[200px] p-2 dark:bg-gray-600">
                                @endif
                            </div>
                            <div>
                                <span><small class="text-gray-700 dark:text-gray-300 mb-2 text-lg font-semibold mr-2 ">BVN:</small>{{ $user->userProfile->BVN ?? 'None' }}</span>
                            </div>
                            <div>
                                <span><small class="text-gray-700 dark:text-gray-300  text-lg font-semibold mr-2">NIN:</small>{{ $user->userProfile->NIN ?? 'None'  }}</span>
                            </div>
                        </div>
                        <!-- Second -->
                        <div class="md:w-1/3 mb-4 md:mb-0">
                            <table class="w-full rounded-md p-5 dark:bg-dark-bg">
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">First Name:</span> {{ $user->firstname }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Last Name:</span> {{ $user->lastname }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Middle Name:</span> {{ $user->middlename }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Email:</span> {{ $user->email }}
                                    </td>
                                </tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Phone Number:</span> {{ $user->phone }}
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <!-- Third -->
                        <div class="md:w-1/3 mb-4 md:mb-0">
                            <table class="w-full rounded-md p-5 dark:bg-dark-bg">
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Date of Birth:</span> {{ $user->DOB }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Street Address:</span> {{ $user->street }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">City/Town:</span> {{ $user->city }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">State:</span> {{ $user->state }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Country:</span> {{ $user->country }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--assignRole-->
            <div class="mb-5 p-4 rounded-lg bg-white dark:bg-dark-eval-1">
                <h2 class="text-lg font-semibold">Assign Role</h2>
                <div class="flex flex-col w-[180px] justify-start space-y-2 md:flex-row md:space-x-2 mt-2">
                    @if ($user->roles)
                        @foreach ($user->roles as $user_role)
                            <form action=" {{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }} " method="POST" onsubmit="return confirm('Are you sure?');"
                                class="px-4 py-2 text-gray-700 bg-violet-50 hover:bg-violet-100 rounded-md dark:bg-dark-bg dark:text-gray-400">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex items-center justify-center space-x-1">
                                    <span>{{ $user_role->name }}</span>
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
                    <form action=" {{ route('admin.users.roles', $user->id) }} " method="POST" class="bg-violet-50 p-6 rounded-lg dark:bg-dark-bg">
                        @csrf
                        <div class="col-span-6 sm:col-span-4">
                            <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Roles Name</label>
                            <select id="role" name="role"  autocomplete="role-name"
                                class="mt-1 block w-full py-2 px-3 shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-dark-eval-1">
                                @foreach ($roles as $role)
                                    <option value=" {{ $role->name }} "> {{ $role->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="px-4 py-3 text-right sm:px-6">
                            <x-button type="submit" class="">
                                Assign Role
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
            <!--givePermissonTo-->
            <div class="mb-5 p-4 rounded-lg bg-white dark:bg-dark-eval-1">
                <h2 class="text-lg font-semibold">Give Permission</h2>
                <div class="flex flex-col w-[180px] justify-start space-y-2 md:flex-row md:space-x-2 mt-5">
                    @if ($user->permissions)
                        @foreach ($user->permissions as $user_permission)
                            <form action=" {{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }} " method="POST" onsubmit="return confirm('Are you sure?');"
                                class="px-4 py-2 text-gray-700 bg-violet-50 hover:bg-violet-100 rounded-md dark:bg-dark-bg dark:text-gray-400">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex items-center justify-between space-x-1">
                                    <span>{{ $user_permission->name }}</span>

                                    <svg class="h-4 w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </form>
                        @endforeach
                    @endif
                </div>
                <div class=" mt-5">
                    <div class="my-2 col-span-6 sm:col-span-4">
                        @error('name')
                            <span class="text-red-500 text-sm"> {{ $message }}</span>
                        @enderror
                    </div>
                    <form action=" {{ route('admin.users.permissions', $user->id) }} " method="POST" class="bg-violet-50 p-6 rounded-md dark:bg-dark-bg ">
                        @csrf
                        <div class="col-span-6 sm:col-span-4">
                            <label for="permission" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Permission Name</label>
                            <select id="permission" name="permission"  autocomplete="permission-name"
                                class="mt-1 block w-full py-2 px-3 shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-dark-eval-1">
                                @foreach ($permissions as $permission)
                                    <option value=" {{ $permission->name }} "> {{ $permission->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="px-4 py-3 text-right sm:px-6">
                            <x-button type="submit" class="">
                                Give Permission
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
