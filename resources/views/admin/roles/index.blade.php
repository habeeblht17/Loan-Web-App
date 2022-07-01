<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('Role') }}
                </h2>
            </div>
            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('admin.roles.create') }} " class=""> Create Role </a>
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

    <div class="p-6 overflow-hidden bg-white rounded-md shadow dark:bg-dark-eval-1 dark:text-gray-400">
        <div class="bg-violet-50 overflow-hidden rounded-lg dark:bg-dark-eval-1">
            <div class="p-4 bg-violet-50 dark:bg-dark-eval-1">
                <div class="w-full">
                    <div>
                        <h1 class="p-1 text-xl text-gray-500 dark:text-gray-100 font-semibold">List of Roles</h1>
                    </div>
                    <table class="w-full rounded-lg bg-violet-50 dark:bg-dark-bg">
                        <thead class="w-full bg-blue-900 text-gray-100 dark:bg-gray-700 dark:text-gray-300">
                            <tr >
                                <th class="p-3 text-sm text-left font-semibold">Roles</th>
                                <th class="p-3 text-sm text-left font-semibold">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="w-full divide-y divide-gray-300">
                            @foreach ($roles as $role)
                                <tr>
                                    <td class="p-3 text-sm text-left font-semibold text-gray-400"> {{ $role->name }} </td>
                                    <td class="p-3 text-sm text-left font-semibold text-gray-400">
                                        <div class="flex justify-start">
                                            <div class="flex space-x-2">
                                                <a href=" {{ route('admin.roles.edit', $role->id) }} " class="px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-md">Edit</a>
                                                <form action=" {{ route('admin.roles.destroy', $role->id) }} " method="POST" onsubmit="return confirm('Are you sure?');"
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
</x-admin-layout>
