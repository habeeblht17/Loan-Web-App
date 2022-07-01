<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('User') }}
                </h2>
            </div>

        </div>
    </x-slot>

    <!--Success Message -->
    @if (session('success'))
        <div class="bg-blue-500 text-sm text-gray-100 w-full rounded-md p-3 my-3 justify-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="p-6 mb-5 overflow-hidden bg-white rounded-md shadow dark:bg-dark-eval-1 dark:text-gray-400">
        <div class="bg-violet-50 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <div class="p-4 bg-violet-50 dark:bg-dark-eval-1">
                <div class="w-full">
                    <div class="flex">
                        <div class="w-1/2">
                            <h1 class="p-1 text-xl text-gray-500 dark:text-gray-100 font-semibold">Users</h1>
                        </div>
                        <!-- Search -->
                        <div class="w-1/2">
                            <form action=" {{ route('admin.users.search') }} " method="GET" class="float-right">
                                @csrf
                                <div class="flex space-x-2">
                                    <!--Search -->
                                    <div class="mb-4">
                                        <x-input id="search" class="block w-full" type="search" name="search"
                                        :value="old('search')" required placeholder="{{ __('Search ') }}" />
                                    </div>
                                    <div class=" ml-2">
                                        <x-button class="justify-center  w-[70px] ">
                                            <x-heroicon-o-search aria-hidden="true" class="w-6 h-6" />
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="w-full rounded-lg bg-violet-50 dark:bg-dark-bg">
                        <thead class="w-full bg-blue-900 text-gray-100 dark:bg-gray-700 dark:text-gray-300">
                            <tr >
                                <th class="p-3 text-sm text-center font-semibold">First Name</th>
                                <th class="p-3 text-sm text-center font-semibold">Last Name</th>
                                <th class="p-3 text-sm text-center font-semibold">Middle Name</th>
                                <th class="p-3 text-sm text-center font-semibold">Email</th>
                                <th class="p-3 text-sm text-center font-semibold">Action</th>
                            </tr>
                        </thead>
                        <tbody class="w-full divide-y divide-gray-300">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="p-3 text-sm text-center font-semibold text-gray-400"> {{ $user->firstname }}</td>
                                    <td class="p-3 text-sm text-center font-semibold text-gray-400"> {{ $user->lastname }} </td>
                                    <td class="p-3 text-sm text-center font-semibold text-gray-400"> {{ $user->middlename }} </td>
                                    <td class="p-3 text-sm text-center font-semibold text-gray-400"> {{ $user->email }} </td>
                                    <td class="p-3 text-sm text-center font-semibold text-gray-400">
                                        <div class="flex justify-center">
                                            <div class="flex space-x-2 ">
                                                <a href=" {{ route('admin.users.show', $user->id) }} " class="px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-md">Roles</a>
                                                <form action=" {{ route('admin.users.destroy', $user->id) }} " method="POST" onsubmit="return confirm('Are you sure?');"
                                                    class="px-4 py-2 text-white bg-red-600 hover:bg-red-700 rounded-md">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $users->links() }}
</x-admin-layout>
